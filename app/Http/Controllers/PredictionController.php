<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Phpml\Dataset\Demo\IrisDataset;
use Phpml\Dataset\Demo\WineDataset;
use Phpml\Dataset\Demo\GlassDataset;
use Phpml\Dataset\CsvDataset;
use Illuminate\Support\Facades\Storage;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\CrossValidationRandomSplit;
use Phpml\Dataset\Demo\NewsDataset;
use Phpml\Classification;
use Phpml\Classification\Linear;
use Phpml\Classification\Ensemble;
use Phpml\CrossValidation\RandomSplit;
use Phpml\Regression\LeastSquares;
use Phpml\Classification\DecisionTree;
class PredictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    function trainData(){
	    $naive = new Classification\NaiveBayes();
    	$row = 0;
	    $file_n = Storage::path('public/newdata.csv');
	    $vendor_file = 'http://localhost/FakeNews/vendor/php-ai/php-ml/data/news.csv';
	    $file = new CsvDataset($file_n, 3, true);
	    $as = $file;
	    $rr  = [];
	    $rra = [];
	    foreach ($as->getSamples() as $key => $val){
	    	$rr [] = $val;
	    }
	    $samples = $rr;
	    foreach ($as->getTargets() as $keys => $vals){
	    	$rra[] = $vals;
	    }
	    $targets = $rra;
	    $training = $naive->train($samples,$targets);
	    $news = News::all();
	    $sample = [];
	    foreach ($news as $val){
		    $sample[] = $val->title;
		    $sample[] = $val->source;
		    $sample[] = $val->description;
		    $prediction = $naive->predict($sample);
//		    echo "<pre>";
//		    var_dump($prediction);
	    }
    }

    public function predict(){
	    $naive = new Classification\NaiveBayes();
    	$news = News::all();
    	$sample = [];
    	foreach ($news as $val){
		    $sample[] = $val->title;
		    $sample[] = $val->source;
		    $sample[] = $val->description;
		    $prediction = $naive->predict([$sample]);
		    echo "<pre>";
		    var_dump($prediction);
	    }
    	die();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$news = News::where('prediction' , null)->get();
        return view('dashboard.predict.add',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $data = $request->only( [
		                            'news_predict'
	                            ] );
	    $news =News::find($data['news_predict']);
	    $naive = new Classification\NaiveBayes();;
	    $file_n = Storage::path('public/newdata.csv');
	    $file = new CsvDataset($file_n, 3, true);

	    $as = $file;
	    $rr  = [];
	    $rra = [];
	    foreach ($as->getSamples() as $key => $val){
		    $rr [] = $val;
	    }
	    $samples = $rr;
	    foreach ($as->getTargets() as $keys => $vals){
		    $rra[] = $vals;
	    }
	    $targets = $rra;
	    $training = $naive->train($samples,$targets);
	    $sample = [$news->source,$news->title,$news->description];
	    $prediction = $naive->predict($sample);
	    $news->prediction = $prediction;
	    $news->save();
	    return redirect()->back()->with(['message' => 'Successfully Predicted', 'alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
