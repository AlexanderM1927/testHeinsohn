<?php
// FIRST
$workers = Worker::select('FIRST_NAME', 'LAST_NAME', 'SALARY')->get();
// SECOND
$bonus = new Bonus;
$bonus->WORKER_REF_ID = 3;
$bonus->BONUS_DATE = '2020-01-01 01:01:01';
$bonus->BONUS_AMOUNT = 10000;
$bonus->save();
// THIRD
$sub = Worker::select('WORKER_ID', 'BONUS_AMOUNT');

$sum = DB::table( DB::raw("({$sub->toSql()}) as sub") )
            ->mergeBindings($sub->getQuery())
            ->select(DB::raw("SUM(sub.BONUS_AMOUNT) as BONUS_AMOUNT"), 'sub.WORKER_ID');
// FOURTH
$workersPerArea = Title::distinct()
->select('WORKER_TITLE',
        DB::raw("COUNT(Title.WORKER_TITLE) as COUNT_WORKERS")
)
->groupBy('WORKER_TITLE')
->get();

?>