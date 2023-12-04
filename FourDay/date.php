


<?php

class Date {
    public $sdate;
    public $edate;

    public function Interval($start, $end) {
        $this->sdate = new DateTime($start);
        $this->edate = new DateTime($end);

        return $this->sdate->diff($this->edate);
    }
}

$date = new Date;

$result = $date->Interval("1981-11-03", "2013-09-04");

echo "Difference between dates:\n";
echo "Years: " . $result->y . "\n";
echo "Months: " . $result->m . "\n";
echo "Days: " . $result->d . "\n";
echo "Hours: " . $result->h . "\n";
echo "Minutes: " . $result->i . "\n";
echo "Seconds: " . $result->s . "\n";


?>