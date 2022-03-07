@extends('Smsir::components.index')
@section('body')
<div class="row">
    <h3>پیام های دریافتی امروز</h3>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>موبایل</th>
                        <th>شماره</th>
                        <th>پیام</th>
                        <th>تاریخ ارسال</th>
                        <th>هزینه</th>
                        <th>وضعیت</th>
                    </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->Mobile }}</td>
                            <td>{{ $message->LineNumber }}</td>
                            <td>{{ $message->MessageText }}</td>
                            <td>{{ $message->SendDateTime }}</td>
                            <td>{{ $message->Cost }}</td>
                            <td>{{ $message->DeliveryState }}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="row">
                    @isset($next_page)
                        <a class="btn btn-outline-light" href="{{ route('todaysent',[ 'page_num' => $next_page ]) }}">بعدی</a>
                    @endisset
                    @isset($previous_page)
                        <a class="btn btn-outline-light" href="{{ route('todaysent',[ 'page_num' => $previous_page ]) }}">قبلی</a>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@stop