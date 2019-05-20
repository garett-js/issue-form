@extends('layout')

@section('page_title')
    {{ "Задать вопрос" }}
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="card bg-light">
        <h5 class="card-header text-center">Задать вопрос</h5>

        <div class="card-body">
            <form method="POST" action="/issues/{{ $issue->id }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                
                <div class="form-group">
                    @include('_errors')
                    <label>Ваш номер телефона</label>
                    <input name="phone_number" 
                            class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" 
                            type="text" 
                            placeholder="Номер телефона"
                            value="{{ $issue->phone_number }}">
                </div>
            
                <div class="form-group">
                    <label>Ваше Имя</label>
                    <input name="name" 
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                            type="text" 
                            placeholder="Имя"
                            value="{{ $issue->name }}">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="is_client" id="is_client" value="1" {{ $issue->is_client ? 'checked' : '' }}>  
                    <label class="checkbox" for="is_client">Вы уже являетесь нашим клиентом? *</label>  
                </div>
            
                <div class="form-group">
                    <label>Кому из наших сотрудников адресован вопрос</label>
                        <select name="employee_id" class="form-control">
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }} / {{ $employee->position }}</option>
                            @endforeach
                        <select>                        
                </div>
                
                <div class="form-group">
                    <label>Задать свой вопрос (опишите проблему, по возможности подробней)</label>
                        <textarea name="issue" 
                            class="form-control {{ $errors->has('issue') ? 'is-invalid' : '' }}" 
                            placeholder="Добавьте описание">{{ $issue->issue }}
                        </textarea>
                </div>
                
                <div class="form-group">
                    <label>Организация (если нет, оставье поле пустым)</label>
                        <input name="organization" 
                            class="form-control {{ $errors->has('organization') ? 'is-invalid' : '' }}" 
                            type="text" 
                            placeholder="Наименование вашей организации"
                            value="{{ $issue->organization }}">
                </div>
                
                <div class="form-group">
                    <label>Версия 1С</label>
                        <input name="ver_1c" 
                            class="form-control {{ $errors->has('ver_1c') ? 'is-invalid' : '' }}" 
                            type="text" 
                            placeholder="Версия 1С"
                            value="{{ $issue->ver_1c }}">
                </div>
                
                    <div class="form-group">
                        <label>Версия платформы 1С</label>
                            <input name="ver_platform" 
                                class="form-control {{ $errors->has('ver_platform') ? 'is-invalid' : '' }}" 
                                type="text" 
                                placeholder="Версия платформы 1С"
                                value="{{ $issue->ver_platform }}">
                    </div>
                
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="is_remote" id="is_remote" value="1" {{ $issue->is_remote ? 'checked' : '' }}>  
                        <label class="checkbox" for="is_remote">Возможность удаленного подключения</label>  
                    </div>   
                    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="inputImageFile">
                        <label class="custom-file-label" for="inputImageFile">Выбрать изображение...</label>
                    </div>
                <hr>

                <button class="btn btn-primary" type="submit">Отправить</button>
            </form>

        </div>
    </div>
</div>

<hr>
@endsection