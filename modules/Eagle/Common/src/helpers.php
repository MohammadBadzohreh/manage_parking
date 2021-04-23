<?php

function newFeedback($title = 'عملیات موفقیت آمیز', $body = 'عملیات با موفقیت انجام شد', $color = 'green'){
    $session = session()->has('feedbacks') ? session()->get('feedbacks') : [];
    $session[] = ['title' => $title, "body"=>  $body, "color" => $color];
    session()->flash('feedbacks', $session);
}
