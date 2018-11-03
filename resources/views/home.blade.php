@extends('layouts.app')

@section('content')
    <ul class="submenu parent-megamenu">
        <li class="switcher-option">
            <a href="{{url('/product-management')}}" class="switcher-flag icon">Products</a>
        </li>
        <li class="switcher-option">
            <a href="{{url('/product-management/create')}}" class="switcher-flag icon">Create Products</a>
        </li>
        <li class="switcher-option">
            <a href="{{url('/category-management')}}" class="switcher-flag icon">Category</a>
        </li>
        <li class="switcher-option">
            <a href="{{url('/subcategory-management')}}" class="switcher-flag icon">Sub Category</a>
        </li>
        <li class="switcher-option">
            <a href="{{url('/city-management')}}" class="switcher-flag icon">City</a>
        </li>
    </ul>
    {{--<div class="sidebar-nav navbar-collapse">--}}
        {{--<ul class="nav" id="side-menu">--}}
            {{--<li class="sidebar-search">--}}
                {{--<div class="input-group custom-search-form">--}}
                    {{--<input type="text" class="form-control" placeholder="Search...">--}}
                    {{--<span class="input-group-btn">--}}
                    {{--<button class="btn btn-default" type="button">--}}
                        {{--<i class="fa fa-search"></i>--}}
                    {{--</button>--}}
                {{--</span>--}}
                {{--</div>--}}
                {{--<!-- /input-group -->--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/category/add') }}">Add Category</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/category/manage') }}">Manage Category</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manufacturer Info<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/manufacturer/add') }}">Add Manufacturer</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/manufacturer/manage') }}">Manage Manufacturer</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product Info<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/product/add') }}">Add Product</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="{{ url('/product/manage') }}">Manage Product</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}


            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="blank.html">Blank Page</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="login.html">Login Page</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{----}}
    {{--</div>--}}
@endsection