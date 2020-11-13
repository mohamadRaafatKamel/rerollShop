<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $product_price
 * @property string $random_price
 * @property string $cover_img
 * @property int $cat_id
 * @property string $randem_date
 * @property string $brand
 * @property string $color
 * @property string $size
 * @property string $gender
 * @property int $user_id
 * @property string $product_code
 * @property string $date
 * @property string $details
 *
 * @property Category $cat
 * @property Users $user
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'product_price', 'random_price', 'cover_img', 'cat_id', 'randem_date', 'user_id', 'product_code', 'details'], 'required'],
            [['product_price', 'random_price'], 'number'],
            [['cat_id', 'user_id'], 'integer'],
            [['randem_date', 'date'], 'safe'],
            [['product_code'], 'unique'],
            [['name', 'cover_img', 'brand', 'color', 'size', 'gender', 'product_code', 'details'], 'string', 'max' => 250],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'اسم',
            'product_price' => 'سعر المنتج',
            'random_price' => 'سعر القرعه',
            'cover_img' => 'غلاف',
            'cat_id' => 'التصنيف',
            'randem_date' => 'تاريخ السحب',
            'brand' => 'براند',
            'color' => 'لون',
            'size' => 'حجم',
            'gender' => 'الجنس',
            'user_id' => 'User ID',
            'product_code' => 'الكود',
            'date' => 'Date',
            'details' => 'تفاصيل',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
    
    public function getProduct($params, $filter = null) 
    {
        $query = Product::find(); 
        if($filter === null){
            $filter=[
                'cat'=>" ",
            ];
        }
        //print_r($filter);die();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pagesize' => 20,
            ],
            'sort' => ['defaultOrder' => ['date' => SORT_DESC]]
        ]);

        $this->load($params);
        
        if(isset($filter['cat']) && $filter['cat']!= " "){
            //$query->andFilterWhere([ '!=' , 'cgid', $filter['group'] ]);
        }else{
            $query->andFilterWhere(['cat_id' => $this->cat_id]);
        }
        
        $query->andFilterWhere([
            'name' => $this->name,
            
        ]);
        
                
        return $dataProvider;   
    }
}
