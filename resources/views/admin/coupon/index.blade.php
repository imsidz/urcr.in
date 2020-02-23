@extends('layouts.admin')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal"
                data-target="#generate">
                Generate Coupon
            </button>

            <!-- Modal -->
            <div class="modal fade" id="generate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Generate Coupon</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/coupon" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="">Coupon Name(Optional)</label>
                                        <input type="text" name="name" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="code">Coupon Code</label>
                                        <input type="text" name="code" id="code" class="form-control"
                                            placeholder="Leave blank for random code" aria-describedby="helpId">
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="">Discount in Percent</label>
                                        <input type="number" name="percent" id="" class="form-control"
                                            placeholder="Only Numbers" aria-describedby="helpId">
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Max Amount</label>
                                        <input type="text" name="max" id="" class="form-control"
                                            placeholder="Max Amount" aria-describedby="helpId">
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Limit</label>
                                        <br>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-warning btn-sm active">
                                                <label for="">Single Use</label>
                                                <input type="radio" name="limit" id="" autocomplete="off" value="single"
                                                    checked>
                                            </label>
                                            <label class="btn btn-warning btn-sm">
                                                <label for="">Multi Use</label>
                                                <input type="radio" name="limit" id="" autocomplete="off" value="multi">
                                            </label>
                                        </div>
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="amount">Enter Amount if coupon multiple</label>
                                        <input type="number" name="amount" id="amount" class="form-control"
                                            placeholder="Only Numbers" aria-describedby="helpId">
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>

                                    <button type="submit" class="btn btn-success btn-sm">Generate</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <h3>Coupon Lists</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Name</th>
                        <th width="5%">%</th>
                        <th width="5%">Max</th>
                        <th width="5%">Use</th>
                        <th width="5%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coupons as $index => $coupon)
                    <tr>
                        <td>
                            {{ $index + 1 }}
                        </td>
                        <td>
                            {{ $coupon->name }}
                        </td>
                        <td>
                            {{ $coupon->discount_percent }}%
                        </td>
                        <td>
                            {{ $coupon->max_amount }}
                        </td>
                        <td>
                            @if($coupon->single_use == false)
                            {{ $coupon->limit_number }} Left
                            @else
                            Single Use Only
                            @endif
                        </td>
                        <td>
                            @if($coupon->active == true)
                            Active
                            @else
                            Deactive
                            @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
