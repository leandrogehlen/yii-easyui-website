<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $product_id
 * @property string $name
 * @property string $price
 * @property string $status
 * @property string $description
 * @property Category $category
 */
class Product extends EuiActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, price', 'required'),
			array('name', 'length', 'max'=>255),
			array('price', 'length', 'max'=>15),
			array('status', 'length', 'max'=>1),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_id, name, category.name', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('site', 'Id'),
			'name' => Yii::t('site', 'Name'),
			'price' => Yii::t('site', 'Price'),
			'status' => Yii::t('site', 'Status'),
			'description' => Yii::t('site', 'Description'),
			'category' => Yii::t('site', 'Category'),
		);
	}
	
	public function attributeExports() 
	{
		return array(
			'id',
			'name',
			'price',
			'status',
			'description',
			'category.name',
			//'category_id'	
		);
	}	
}