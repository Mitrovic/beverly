<?php

namespace frontend\controllers;

use app\models\AccidentRecord;
use app\models\AlcoholDrugs;
use app\models\CertificateRoadTest;
use app\models\DrivingExperience;
use app\models\EmploymentHistory;
use app\models\Licenses;
use app\models\LicensesCustom;
use app\models\NonViolationCertification;
use app\models\OtherCompensatedWork;
use app\models\RoadTestExamination;
use app\models\TrafficConvictions;
use app\models\ViolationCertification;
use Symfony\Component\BrowserKit\History;
use Yii;
use app\models\Address;
use app\models\Driver;
use app\models\Model;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use yii\widgets\ActiveForm;
use yii\data\ActiveDataProvider;



/**
 * DriverController implements the CRUD actions for Driver model.
 */
class DriverController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Driver models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Driver::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Driver model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionPdfpreview($id)
    {
        return $this->render('pdfpreview', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Driver model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Driver;
        $address = [new Address];
        $employment_history = [new EmploymentHistory];

        if ($model->load(Yii::$app->request->post())) {
            $address = Model::createMultiple(Address::classname());
            Model::loadMultiple($address, Yii::$app->request->post());
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($address),
                    ActiveForm::validate($model)
                );
            }
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($address) && $valid;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($address as $single_address) {
                            $single_address->driver_id = $model->id;
                            if (!($flag = $single_address->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {

                        $transaction->commit();

                        return $this->redirect(['history', 'id' => $model->id]);

                    }

                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }else{
            return $this->render('create', [
                'model' => $model,
                'address' => (empty($address)) ? [new Address] : $address,
                'employment_history' => (empty($employment_history)) ? [new EmploymentHistory] : $employment_history
            ]);
        }

    }

    public function actionHistory($id)
    {
        $model = $this->findModel($id);
        $history = [new EmploymentHistory];
        $accidents = [new AccidentRecord];
        $traffic_convictions = [new TrafficConvictions];
        $licenses = [new Licenses];
        $licenses_custom = new LicensesCustom();
        $driving_experience = new DrivingExperience();

        if ($model->load(Yii::$app->request->post())) {
            $history = Model::createMultiple(EmploymentHistory::classname());
            $accidents = Model::createMultiple(AccidentRecord::classname());
            $traffic_convictions = Model::createMultiple(TrafficConvictions::classname());
            $licenses = Model::createMultiple(Licenses::classname());
            Model::loadMultiple($history,Yii::$app->request->post());
            Model::loadMultiple($accidents,Yii::$app->request->post());
            Model::loadMultiple($traffic_convictions,Yii::$app->request->post());
            Model::loadMultiple($licenses,Yii::$app->request->post());
            $licenses_custom->load(Yii::$app->request->post());
            $driving_experience->load(Yii::$app->request->post());
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validateMultiple($history);
            }
            // validate all models
            //$valid = $model->validate();
            $valid = Model::validateMultiple($history);
            $validAccidents = Model::validateMultiple($accidents);
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();

                try {
                    if ($flag = $model->save(false)) {
                        foreach ($history as $employer) {
                            $employer->driver_id = $model->id;
                            if (!($flag = $employer->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        foreach ($accidents as $accident) {
                            $accident->driver_id = $model->id;
                            if (!($flag = $accident->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        foreach ($traffic_convictions as $traffic) {
                            $traffic->driver_id = $model->id;
                            if (!($flag = $traffic->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        foreach ($licenses as $license) {
                            $license->driver_id = $model->id;
                            if (!($flag = $license->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        $licenses_custom->driver_id = $model->id;
                        $licenses_custom->save(false);
                        $driving_experience->driver_id = $model->id;
                        $driving_experience->save(false);

                    }
                    //if ($flag) {

                        $transaction->commit();

                        return $this->redirect(['certificate', 'id' => $model->id]);

                    //}

                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }else{
            return $this->render('history', [
                'model' => $model,
                'history' => (empty($history)) ? [new EmploymentHistory] : $history,
                'accidents' => (empty($accidents)) ? [new AccidentRecord] : $accidents,
                'traffic_convictions' => (empty($traffic_convictions)) ? [new TrafficConvictions] : $traffic_convictions,
                'licenses' => (empty($licenses)) ? [new Licenses] : $licenses,
                'licenses_custom' => $licenses_custom,
                'driving_experience' => $driving_experience,
            ]);
        }

    }


    public function actionCertificate($id)
    {
        $model = $this->findModel($id);

        $certificate = new CertificateRoadTest();

        if ($certificate->load(Yii::$app->request->post())) {
            $certificate->driver_id = $model->id;
            $certificate->save(false);
            return $this->redirect(['examination', 'id' => $model->id]);
        }

        return $this->render('certificate', [
            'certificate' => $certificate,
        ]);
    }

    public function actionExamination($id)
    {
        //die('ssss');
        $model = $this->findModel($id);

        $examination = new RoadTestExamination();

        if ($examination->load(Yii::$app->request->post())) {
            $examination->driver_id = $model->id;
            $examination->save(false);
            return $this->redirect(['duty', 'id' => $model->id]);
        }

        return $this->render('road_test_examination', [
            'examination' => $examination,
        ]);
    }

    public function actionDuty($id)
    {
        $model = $this->findModel($id);

        $other_works = new OtherCompensatedWork();

        if ($other_works->load(Yii::$app->request->post())) {
            $other_works->driver_id = $model->id;
            $other_works->save(false);
            return $this->redirect(['violation', 'id' => $model->id]);
        }

        return $this->render('other_works', [
            'other_works' => $other_works,
        ]);
    }

    public function actionViolation($id)
    {
        $model = $this->findModel($id);

        $violations = [new ViolationCertification()];

        if($model->load(Yii::$app->request->post())){
            $violations = Model::createMultiple(ViolationCertification::classname());
            Model::loadMultiple($violations, Yii::$app->request->post());

            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($violations),
                    ActiveForm::validate($model)
                );
            }

            $valid = $model->validate();
            $valid = Model::validateMultiple($violations) && $valid;

                $transaction = \Yii::$app->db->beginTransaction();
                try {

                    if ($flag = $model->save(false)) {
                        foreach ($violations as $violation) {
                            $violation->driver_id = $model->id;
                            if (! ($flag = $violation->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['alchoholdrugs', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }

        }
        //die(var_dump($model));
        return $this->render('violation', [
            'model'     => $model,
            'violations' => (empty($violations)) ? [new ViolationCertification] : $violations
        ]);
    }

    public function actionNonviolation($id)
    {
        $model = $this->findModel($id);

        $non_violation = new NonViolationCertification();

        if ($non_violation->load(Yii::$app->request->post())) {
            $non_violation->driver_id = $model->id;
            $non_violation->save(false);
            return $this->redirect(['alchoholdrugs', 'id' => $model->id]);
        }

        return $this->render('non_violation', [
            'non_violation' => $non_violation,
        ]);
    }


    public function actionAlchoholdrugs($id)
    {
        $model = $this->findModel($id);

        $alcohol_drugs = new AlcoholDrugs();

        if ($alcohol_drugs->load(Yii::$app->request->post())) {
            $alcohol_drugs->driver_id = $model->id;
            $alcohol_drugs->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('alcohol_drugs', [
            'alcohol_drugs' => $alcohol_drugs,
        ]);
    }

    /**
     * Updates an existing Driver model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Driver model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Driver model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Driver the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Driver::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
