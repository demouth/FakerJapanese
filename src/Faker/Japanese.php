<?php
/**
 * @author 	demouth.net
 * @license http://www.opensource.org/licenses/mit-license.php  The MIT License (MIT)
 */

/**
 * Faker_Japanese
 * 
 * 日本語ユーザに関する偽の情報をランダムに生成するためのライブラリ。キラキラした名前を生成します。
 * UTF-8で名前を出力します。読みがなが文字化けする場合はinternal_encodingを確認してみてください。
 * 
 * @author 	demouth.net
 */
class Faker_Japanese
{
	
	/**
	 * 姓+半角スペース+名+'（'+姓の読みがな（ひらがな）+半角スペース+名の読みがな（ひらがな）+'）'
	 * @var string
	 */
	public $name = '';
	
	/**
	 * 姓
	 * @var string
	 */
	public $lastName = '';
	
	/**
	 * 名
	 * @var string
	 */
	public $firstName = '';
	
	/**
	 * 姓の読みがな（ひらがな）
	 * @var string
	 */
	public $lastNameYomi = '';
	
	/**
	 * 名の読みがな（ひらがな）
	 * @var string
	 */
	public $firstNameYomi = '';
	
	/**
	 * 姓の読みがな（カタカナ）
	 * @var string
	 */
	public $lastNameYomiKatakana = '';
	
	/**
	 * 名の読みがな（カタカナ）
	 * @var string
	 */
	public $firstNameYomiKatakana = '';
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->setProperties();
	}
	
	/**
	 * メンバ変数を設定する
	 */
	protected function setProperties()
	{
		list($this->lastName,$this->lastNameYomi)
			= self::chooseLastNameAtRandom();
		list($this->firstName,$this->firstNameYomi)
			= self::chooseFirstNameAtRandom();
		
		$this->lastNameYomiKatakana
			= mb_convert_kana($this->lastNameYomi,'C');
		$this->firstNameYomiKatakana
			= mb_convert_kana($this->firstNameYomi,'C');
		
		$this->name =
			$this->lastName.' '.$this->firstName.
			'（'.$this->lastNameYomi.' '.$this->firstNameYomi.'）'
		;
	}
	
	/**
	 * 名前をランダムで返す
	 * @param string 'last'or'first'
	 * @return array
	 */
	protected static function chooseNameAtRandom($type='last')
	{
		$fileName = $type.'_names.php';
		$DS = DIRECTORY_SEPARATOR;
		$filePath = dirname(__FILE__).$DS.'Japanese'.$DS.$fileName;
		$names = include $filePath;
		$l = count($names);
		$name = $names[rand(0,$l-1)];
		return $name;
	}
	
	/**
	 * 姓をランダムで返す
	 * @return array
	 */
	protected static function chooseLastNameAtRandom()
	{
		return self::chooseNameAtRandom('last');
	}
	
	/**
	 * 名をランダムで返す
	 * @return array
	 */
	protected static function chooseFirstNameAtRandom()
	{
		return self::chooseNameAtRandom('first');
	}
	
}
