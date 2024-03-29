<?php

namespace app\controllers;

use Yii;
use app\models\KendaraanPelanggan;
use app\models\Pelanggan;
use app\models\Carbon;
use app\models\search\CarbonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CarbonController implements the CRUD actions for Carbon model.
 */
class CarbonController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Carbon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CarbonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Carbon model.
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

    /**
     * Creates a new Carbon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Carbon();

        $namaPelanggan = Pelanggan::getAllPelanggan();
        $namaKendaraan = KendaraanPelanggan::getAllKendaraanPelanggan();

        $jenisMotif = Carbon::JENIS_MOTIF;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'jenisMotif' => $jenisMotif,
            'namaPelanggan' => $namaPelanggan,
            'namaKendaraan' => $namaKendaraan
        ]);
    }

    /**
     * Updates an existing Carbon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $namaPelanggan = Pelanggan::getAllPelanggan();
        $namaKendaraan = KendaraanPelanggan::getAllKendaraanPelanggan();
        $jenisMotif = Carbon::JENIS_MOTIF;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'jenisMotif' => $jenisMotif,
            'namaPelanggan' => $namaPelanggan,
            'namaKendaraan' => $namaKendaraan
        ]);
    }

    /**
     * Deletes an existing Carbon model.
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
     * Finds the Carbon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Carbon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Carbon::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
