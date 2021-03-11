@extends('layouts.app')

@section('content')
       <h1><?php echo $title; ?></h1>
       
<div style="width: 100%;">
       <div style="width: 50%; height: 300px; float: left; background: grey;"> 
       <p>
       The Depression, Anxiety and Stress Scale - 21 Items (DASS-21) is a set of three self-report scales designed 
       to measure the emotional states of depression, anxiety and stress. Each of the three DASS-21 scales contains 7 items, divided into subscales with similar content.
       Subjects are asked to use 4-point severity/frequency scales to rate the extent to which they have experienced each state over the past week. 
       Scores for Depression, Anxiety and Stress are calculated by summing the scores for the relevant items.     
       </p>
     
       </div>

       <div style="margin-left: 50%; height: 300px; background: white;"> 
       <p>Take Test</p>
       </div>
</div>

@endsection