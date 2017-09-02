<?php
class RatesCommand extends CConsoleCommand {
    public function run($args) {
        $getRates = file_get_contents('http://query.yahooapis.com/v1/public/yql?q=select%20%2a%20from%20yahoo.finance.xchange%20where%20pair%20in%20%28%22USDIDR%22%29&env=store://datatables.org/alltableswithkeys&format=json');
		
		$rates = json_decode($getRates,true);
		
		$idr = number_format($rates["query"]["results"]["rate"]["Rate"],0,",","");
		
		$command = Yii::app()->db->createCommand();
		$update = $command->update('kurs', array(
					    'kurs'=>$idr,
					    'updated_date'=>date('Y-m-d H:i:s'),
					));

		//update all product price
		$data["Kurs"]["kurs"] = $idr;
		$data["Kurs"]["auto"] = 1;

		//url-ify the data for the POST
		$data_string = http_build_query($data);

		$update_price = MyHelpers::jhCurl('http://jalanhalal.com/kurs/update',$data_string);
		
		echo "<br/><br/>Current rates USD 1 = IDR ".$idr;exit;
    }
}