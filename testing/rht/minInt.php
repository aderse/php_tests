<?php
function minInt() {
	$minVal = null;
	$numArgs = func_num_args();
	$argList = func_get_args();
	for( $ii=0; $ii<$numArgs; $ii++ ){
		if(is_int($argList[$ii])) {
			$minVal = $argList[$ii];
		} else {
			$minVal = ($minVal > $argList[$ii]) ? $argList[$ii] : $minVal;
		}
	}
	if( is_null($minVal)) {
		return 'No valid integers were passed in';
	}
	return "The minimum integer is: {$minVal}";
}

echo minInt(3,-5);