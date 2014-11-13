<html>
<head>
	
</head>
<body>
<?php
/**
* 
*/
class Product
{
	// general
	
	private $name = "unidentified";
	private $code="unidentified";
	private $amount =  0.0;
	private $unitAmount = "unidentified";
    private $netWeight = 0.0;//
	private $unitWeight = "unidentified";

	// finance
	private $currency = "unidentified";
	private $cost = 0.0;
	private $price = 0.0;//
	private $profit = 0.0;
    private $sale = 0.0;

	// feature
	private $hierarchy = "unidentified";// ระดับชั้น
	private $certificate = "unidentified";
	private $expire = "unidentified";//
    private $authorization = "unidentified";// ผู้มีอำนาจรับผิดชอบ

	// logistic
    private $orderLeadTime = 0; // ระยะเวลาสั่งซื้อ(หน่วยเป็น ชม) ระยะเวลาการสั่งของ
    private $unitOrderLeadTime = "unidentified";
	private $minimumPacking =  0.0;
	private $unitMinimumPacking = "unidentified";
	private $minimumOrder = 0;
	private $paymentTerm = "unidentified"; // เงื่อนไขการชำระ ex cash 30 วัน,cheque 3 วัน
													// FACTORY=ราคาหน้าโรงงานผลิต
													// FOB=ราคาถึงท่าเรือของผู้ขาย
													// CIF=ราคาถึงท่าเรือของผู้ซื้อ
													// DDU=ราคาถึงผู้ซื้อไม่รวมภาษี
													// DDP=ราคาถึงผู้ซื้อรวมภาษี
	private $allocation = "unidentified";// การจัดสรร

	/* All set method */
	// general
	

	public function setName($name) {
		$this->name = $name;
	}

	public function setCode($code) {
		$this->code = $code;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
	}

	public function setUnitAmount($unitAmount) {
		$this->unitAmount = $unitAmount;
	}

	public function setNetWeight($netWeight) {
		$this->netWeight = $netWeight;
	}

	public function setUnitNetWeight($unitWeight) {
		$this->unitWeight = $unitWeight;
	}

	// finance
	public function setCurrency($currency) {
		$this->currency = $currency;
	}

	public function setCost($cost) {
		$this->cost = $cost;
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function setSale($sale) {
		$this->sale = $sale;
	}

	// feature
	public function setHierarchy($hierarchy) {
		$this->hierarchy = $hierarchy;
	}

	public function setCertificate($certificate) {
		$this->certificate = $certificate;
	}

	public function setExpire($expire) {
		$this->expire = $expire;
	}

	public function setAuthorization($authorization) {
		$this->authorization = $authorization;
	}

	// logistic
	public function setOrderLeadTime($orderLeadTime) {
		$this->orderLeadTime = $orderLeadTime;
	}

	public function setUnitOrderLeadTime($unitOrderLeadTime) {
		$this->unitOrderLeadTime = $unitOrderLeadTime;
	}

	public function setMinimumPacking($minimumPacking) {
		$this->minimumPacking = $minimumPacking;
	}

	public function setUnitMinimumPacking($unitMinimumPacking) {
		$this->unitMinimumPacking = $unitMinimumPacking;
	}

	public function setMinimumOrder($minimumOrder) {
		$this->minimumOrder = $minimumOrder;
	}

	public function setPaymentTerm($paymentTerm) {
		$this->paymentTerm = $paymentTerm;
	}

	public function setAllocation($allocation) {
		$this->allocation = $allocation;
	}

	/* All get method */
	// general
	

	public function getName() {
		return $this->name;
	}

	public function getCode() {
		return $this->code;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function getUnitAmount() {
		return $this->unitAmount;
	}

	public function getNetWeight() {
		return $this->netWeight;
	}

	public function getUnitWeight() {
		return $this->unitWeight;
	}

	// finance
	public function getCurrency() {
		return $this->currency;
	}

	public function getCost() {
		return $this->cost;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getProfit() {
		$this->profit = $this->price - $this->cost;
		return $this->profit;
	}

	public function getSale() {
		return $this->sale;
	}

	// feature
	public function getHierarchy() {
		return $this->hierarchy;
	}

	public function getCertificate() {
		return $this->certificate;
	}

	public function getExpire() {
		return $this->expire;
	}

	public function getAuthorization() {
		return $this->authorization;
	}

	// logistic
	public function getOrderLeadTime() {
		return $this->orderLeadTime;
	}

	public function getUnitOrderLeadTime() {
		return $this->unitOrderLeadTime;
	}

	public function getMinimumPacking() {
		return $this->minimumPacking;
	}

	public function getUnitMinimumPacking() {
		return $this->unitMinimumPacking;
	}

	public function getMinimumOrder() {
		return $this->minimumOrder;
	}

	public function getParmentTerm() {
		return $this->paymentTerm;
	}

	public function getAllocation() {
		return $this->allocation;
	}

	// operation function

	public function sell($amount) {
		$this->sale=($this->sale)+($this->getProfit())*$amount;
		$this->amount=($this->amount)-$amount;
	}
	public function printAll() {

		print "<br>";
		print "Name : ";
		print $this->getName();
		print "<br>";

		print "Code : ";
		print $this->getCode();
		print "<br>";

		print "Amount : ";
		print $this->getAmount();
		print "<br>";

		print "Unit amount : ";
		print $this->getUnitAmount();
		print "<br>";

		print "NetWeight : ";
		print $this->getNetWeight();
		print "<br>";

		print "Unit NetWeight : ";
		print $this->getUnitWeight();
		print "<br>";

		print "Currency : ";
		print $this->getCurrency();
		print "<br>";

		print "Cost : ";
		print $this->getCost();
		print "<br>";

		print "Price : ";
		print $this->getPrice();
		print "<br>";

		print "Profit : ";
		print $this->getProfit();
		print "<br>";

		print "Sale : ";
		print $this->getSale();
		print "<br>";

		print "Hierarchy : ";
		print $this->getHierarchy();
		print "<br>";

		print "Certificate : ";
		print $this->getCertificate();
		print "<br>";

		print "Expire : ";
		print $this->getExpire();
		print "<br>";

		print "Authorization : ";
		print $this->getAuthorization();
		print "<br>";

		print "Order lead time : ";
		print $this->getOrderLeadTime();
		print "<br>";

		print "Unit order lead time : ";
		print $this->getUnitOrderLeadTime();
		print "<br>";

		print "Minimum Packing : ";
		print $this->getMinimumPacking();
		print "<br>";

		print "Unit minimum packing : ";
		print $this->getUnitMinimumPacking();
		print "<br>";

		print "Minimum order : ";
		print $this->getMinimumOrder();
		print "<br>";

		print "Payment term : ";
		print $this->getParmentTerm();
		print "<br>";
		
		print "Allocation : ";
		print $this->getAuthorization();
		print "<br><br>";		
	}
}
?>
</body>
</html>
