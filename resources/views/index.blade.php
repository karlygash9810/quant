@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" id="app">Users</div>

                    {{--@foreach ($data as $datas)
                        <table>
                            <tr>
                                <td class="col-md-1">Подзадача</td>
                                <td class="col-md-2">b_task_id</td>
                                <td class="col-md-1">user_id</td>
                                <td class="col-md-2">time_estimated</td>
                                <td class="col-md-2">time_spent</td>
                                <td class="col-md-1">productivity_factor </td>
                                <td class="col-md-1">effective_time</td>
                                <td class="col-md-1">status}}</td>
                                <td class="col-md-1">user_b_id</td>
                                <td class="col-md-1">planned_start</td>
                                <td class="col-md-1">planned_finish</td>
                                <td class="col-md-1">update</td>
                                <td class="col-md-1">username</td>
                                <td class="col-md-1">weight</td>
                                <td class="col-md-1">operation_name</td>
                                <td class="col-md-1">currentTimerstate</td>
                                <td class="col-md-1">pj_name</td>
                                <td class="col-md-1">area</td>
                                <td class="col-md-1">ws_name</td>
                                <td class="col-md-1">employeer_id</td>
                                <td class="col-md-1">created_at</td>
                                <td class="col-md-1">updated_at</td>
                            </tr>
                            <tr>
                                <td class="col-md-1">{{ $datas->subtask_id }}</td>
                                <td class="col-md-2">{{ $datas->b_task_id }}</td>
                                <td class="col-md-1">{{ $datas->user_id }}</td>
                                <td class="col-md-2">{{ $datas->time_estimated }}</td>
                                <td class="col-md-2">{{ $datas->time_spent }}</td>
                                <td class="col-md-1">{{ $datas->productivity_factor }}</td>
                                <td class="col-md-1">{{ $datas->effective_time }}</td>
                                <td class="col-md-1">{{ $datas->status}}</td>
                                <td class="col-md-1">{{ $datas->user_b_id}}</td>
                                <td class="col-md-1">{{ $datas->planned_start}}</td>
                                <td class="col-md-1">{{ $datas->planned_finish}}</td>
                                <td class="col-md-1">{{ $datas->updated}}</td>
                                <td class="col-md-1">{{ $datas->username}}</td>
                                <td class="col-md-1">{{ $datas->weight}}</td>
                                <td class="col-md-1">{{ $datas->operation_name}}</td>
                                <td class="col-md-1">{{ $datas->currentTimerstate}}</td>
                                <td class="col-md-1">{{ $datas->pj_name}}</td>
                                <td class="col-md-1">{{ $datas->area}}</td>
                                <td class="col-md-1">{{ $datas->ws_name}}</td>
                                <td class="col-md-1">{{ $datas->employeer_id}}</td>
                                <td class="col-md-1">{{ $datas->created_at}}</td>
                                <td class="col-md-1">{{ $datas->updated_at}}</td>
                                <td class="col-md-1"><button class="btn btn-success" type="submit">Activated</button></td></td>
                                <td class="col-md-1"><button class="btn btn-warning" type="submit">Edit</button></td>
                                <td class="col-md-1"><button class="btn btn-danger" type="submit">Delete</button></td>
                            </tr>
                        </table>

                    @endforeach
                    <template>
                        <report>
                            :data="data"
                        </report>
                    </template>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

