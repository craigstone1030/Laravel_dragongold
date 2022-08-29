{{-- Vendor Styles --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600">
<link rel="stylesheet" href="{{asset('admin_assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" href="{{asset('admin_assets/vendors/css/ui/prism.min.css')}}">

<!-- Theme Styles -->
<link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap-extended.css') }}">
<link rel="stylesheet" href="{{ asset('admin_assets/css/colors.css') }}">
<link rel="stylesheet" href="{{ asset('admin_assets/css/components.css') }}">

{{-- {!! Helper::applClasses() !!} --}}
@php 
$configData = Helper::applClasses();
@endphp

@if($configData['theme'] == 'dark-layout')
<link rel="stylesheet" href="{{ asset('admin_assets/css/themes/dark-layout.css') }}">
@endif
@if($configData['theme'] == 'semi-dark-layout')
<link rel="stylesheet" href="{{ asset('admin_assets/css/themes/semi-dark-layout.css') }}">
@endif

<!-- Page Styles -->
<link rel="stylesheet" href="{{ asset('admin_assets/css/core/menu/menu-types/vertical-menu.css') }}">
<style type="text/css">
    .twPc-div {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    height: 200px;
    /*max-width: 340px;*/
}
.twPc-bg {
    background: #98917b8c;
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 95px;
    width: 100%;
}
.twPc-block {
    display: block !important;
}
.twPc-button {
    margin: -35px -10px 0;
    text-align: right;
    width: 100%;
}
.twPc-avatarLink {
    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
    float: left;
    margin: -30px 5px 0 8px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}
.twPc-avatarImg {
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 72px;
    width: 72px;
}
.twPc-divadmin {
    margin: 5px 0 0;
}
.twPc-divName {
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.twPc-divName p {
    color: inherit !important;
}
.twPc-divStats {
    margin-left: 11px;
    padding: 10px 0;
}
.twPc-Arrange {
    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}
ul.twPc-Arrange {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.twPc-ArrangeSizeFit {
    display: table-cell;
    padding: 0;
    vertical-align: top;
}
.twPc-ArrangeSizeFit a:hover {
    text-decoration: none;
}
.twPc-StatValue {
    display: block;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.15s ease-in-out 0s;
}
.twPc-StatLabel {
    color: #8899a6;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
}
</style>