<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }

    /*
    $table->string('phone_number');
    $table->string('name');
    $table->string('employee');
    $table->text('issue');
    $table->string('organization');
    $table->string('ver_1c');
    $table->string('ver_platform');
    $table->boolean('is_remote')->default(false);

    @extends('layout')

    @section('content')
        <h1 class="title">Заявки:</h1>
        <div class="box">
            <ul>
                @foreach ($issues as $issue)
                <li>
                <a href="/customerissues/{{ $issue->id }}">Заявка № {{ $issue->id }} от {{ $issue->organization }}</a>
                </li>
                @endforeach
            </ul>  
        </div>
    @endsection

    @extends('layout')

    @section('content')
        
        <h1 class="title">Заявка № {{ $issue->id }}</h1>
        <p>Дата заявки: {{ $issue->created_at }}</p>
        <hr>

        <div class="box">
            <p>
                Организация: {{ $issue->organization }}
            </p>
            <p>
                Номер телефона: {{ $issue->phone_number }}
            </p>
            <p>
                ФИО клиента: {{ $issue->name }}
            </p>
        </div>

        <h2 class="title">Суть проблемы</h2>
        <div class="box">
            <p>{{ $issue->issue }}</p>

            <p>Версия 1С и платформа: {{ $issue->ver_1c }}, {{ $issue->ver_platform }}</p>
            <p>Возможность удаленного доступа: {{ $issue->is_remote ? 'Есть' : 'Нет' }}</p>
        </div>

    @endsection
    */

}