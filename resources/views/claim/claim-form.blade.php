@extends('layouts.master')

@section('content')
    <div id="claim">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                {{--<h4>{{ $title }}</h4>--}}

                @if(count($errors->all()))
                    <div class="col-xs-offset-3 col-xs-6 alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error  }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{--Form successfully added product--}}
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-xs-offset-3 col-xs-6">
                            <p class="alert alert-success text-center">
                                {{ Session::get('message') }}
                            </p>
                        </div>
                    </div>
                @endif

                <form action="{{ URL::route('claim.create') }}" method="post">

                    <legend>Create New Claim</legend>

                    <legend>Customer</legend>

                    <a href="#claim-existing-customer" id="existing-customer" class="btn btn-info col-xs-8 col-xs-offset-2" >Existing Customer</a>
                    <div id="existing-customer-field" class="form-group col-xs-8 col-xs-offset-2">
                        <label for="customer-email">Existing Customer Email</label>
                        <input type="text" class="form-control" id="existing-customer-email" name="existingcustomeremail" placeholder="email@example.com"
                               >
                    </div>

                    <br />
                    <br />

                    <a href="#claim-new-customer" id="edit-customer-info" class="btn btn-info col-xs-8 col-xs-offset-2">New Customer</a>
                    <div id="claim-new-customer" id="claim-new-customer" class="col-xs-12">
                        <div class="form-group col-xs-6">
                            <label for="customer-first-name">First Name</label>
                            <input type="text" class="form-control" id="customer-first-name" name="firstname">
                        </div>

                        <div class="form-group col-xs-6">
                            <label for="customer-last-name">Last Name</label>
                            <input type="text" class="form-control" id="customer-last-name" name="lastname">
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="customer-address1">Address 1</label>
                            <input type="text" class="form-control" id="customer-address1" name="address1">
                        </div>

                        <div class="form-group col-xs-12">
                            <label for="customer-address2">Address 2</label>
                            <input type="text" class="form-control" id="customer-address2" name="address2">
                        </div>

                        <div class="form-group col-xs-7">
                            <label for="customer-city">City</label>
                            <input type="text" class="form-control" id="customer-city" name="city">
                        </div>

                        <div class="form-group col-xs-2">
                            <label for="customer-state">State</label>
                            <input type="text" class="form-control" id="customer-state" name="state" placeholder="WA">
                        </div>

                        <div class="form-group col-xs-3">
                            <label for="customer-zip">Zip</label>
                            <input type="text" class="form-control" id="customer-zip" name="zip" placeholder="#####">
                        </div>

                        <div class="form-group col-xs-6">
                            <label for="customer-phone">Phone</label>
                            <input type="text" class="form-control" id="customer-phone" name="phone"
                                   placeholder="##########" >
                        </div>

                        <div class="form-group col-xs-6">
                            <label for="customer-email">Email</label>
                            <input type="text" class="form-control" id="customer-email" name="email" placeholder="email@example.com"
                                   >
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <hr/>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-4 text-right">
                            <label for="claim-product">Product</label>
                        </div>

                        <div class="form-group col-xs-8">
                            <select name="products" id="claim-product">
                                @foreach ($products as $product)
                                    <option name="products" value="{{ $product->style }}">
                                        {{ $product->style }} -
                                        {{ $product->collection }} -
                                        {{ $product->color }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-4 text-right">
                            <label for="claim-damage-code">Damage Code</label>
                        </div>

                        <div class="form-group col-xs-8">
                            <select name="damagecode" id="claim-damage-code">
                                @foreach ($damage_codes as $dc)
                                    <option value="{{ $dc->id }}">{{ $dc->id . '-' . $dc->part }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-4 text-right">
                            <label for="claim-repair-center">Repair Center</label>
                        </div>

                        <div class="form-group col-xs-8">
                            <select name="repaircenter" id="claim-repair-center">
                                @foreach ($repair_centers as $rc)
                                    <option value="{{ $rc->id }}">{{ $rc->name }} - {{ $rc->streetName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <br/>

                    <dl class="dl-horizontal">
                        <dt>Claim Type</dt>
                        <dd>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="replace_order" value="0" checked="checked">
                                    <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                    Repair Order
                                </label>
                            </div>
                        </dd>
                        <dd>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="replace_order" value="1">
                                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                                    Replace Order
                                </label>
                            </div>
                        </dd>

                        <br />

                        <dt>Parts Required?</dt>
                        <dd>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="part_needed" value="1">
                                    Yes
                                </label>
                            </div>
                        </dd>
                        <dd>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="part_needed" value="0">
                                    No
                                </label>
                            </div>
                        </dd>

                        <br />


                        <dt>Parts Needed</dt>
                        <dd>
                            <input type="text" class="form-control" name="parts_needed">
                        </dd>

                        <br />

                        <dt>Ship Parts To</dt>
                        <dd>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ship_to" value="Customer" checked="checked">
                                    Customer
                                </label>
                            </div>
                        </dd>
                        <dd>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ship_to" value="Repair Center">
                                    Repair Center
                                </label>
                            </div>
                        </dd>
                    </dl>

                    <div class="form-group col-xs-12">
                        <label for="inputClaimNumber">Comment</label>
                        <textarea class="col-xs-12" name="comment"></textarea>
                    </div>

                    <input type="number" name="claim_new" value="1" hidden>
                    <input type="hidden" id="edit-type-switch" name="edit-type-switch" value="1">

                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-primary col-xs-12" name="submit">Create Claim</button>
                </form>

            </div>
        </div>
    </div>
@endsection