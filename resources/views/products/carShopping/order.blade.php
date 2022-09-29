@extends('layouts.layout')
<section class="container">
<div class="card container">
    <div class="card-header">
        Purchase Completed
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            Congratulations, purchase completed. Order number is <b>#{{ $viewData["order"] }}</b>
        </div>
    </div>
</div>
</section>
