@extends('master')

@section('page_title', 'Recticare')
@section('page_id', 'patient-resources')

@section('content')

    <div id="page-header">
        <div class="container padded">
            <div class="half">
                <h1>Patient Resources</h1>
            </div>
            <div class="half">
                <p>Phasellus neque lacus, pellentesque ut leo eget, tincidunt bibendum sem.</p>
            </div>
        </div>
    </div>

    <div class="gradient-background">

        <div class="container padded">

            <ul class="tabs">
                <li class="tab-link {{ (is_null($section) OR $section == 'common-issues') ? 'current' : '' }}" data-tab="common-issues">Common Issues</li>
                <li class="tab-link {{ ($section == 'hemorrhoid-treatment') ? 'current' : '' }}" data-tab="hemorrhoid-treatment">Hemorrhoid Treatment</li>
                <li class="tab-link {{ ($section == 'patient-resource') ? 'current' : '' }}" data-tab="patient-resource">Patient Resources</li>
                <li class="tab-link {{ ($section == 'colon-cancer-alliance') ? 'current' : '' }}" data-tab="colon-cancer-alliance">Colon Cander Alliance</li>
                <li class="tab-link {{ ($section == 'contact-us') ? 'current' : '' }}" data-tab="contact-us">Contact Us</li>
            </ul>

            <div id="common-issues" class="tab-content {{ (is_null($section) OR $section == 'common-issues') ? 'current' : '' }}">
                <h3>Common Issues</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet, mi a congue ullamcorper, orci augue commodo ante, vel egestas enim dolor a lectus. Maecenas vitae massa at ex interdum ultrices. Proin sed nibh ligula. Nam ut sapien sed ex efficitur elementum. Pellentesque at sapien tincidunt, commodo mauris quis, interdum lacus. Etiam at felis vitae diam egestas vulputate. Phasellus neque lacus, pellentesque ut leo eget, tincidunt bibendum sem. Nunc maximus lorem ut enim mattis, malesuada hendrerit massa imperdiet. In hac habitasse platea dictumst. Phasellus commodo placerat accumsan. Quisque scelerisque iaculis ipsum sit amet varius. Praesent aliquam nunc ipsum, sit amet tincidunt nisi bibendum eu. Aenean ultricies quis turpis at ultricies. In massa velit, aliquet eget commodo ut, varius eu diam. Sed dapibus enim in eleifend consequat.</p>
                <p>Sed ultrices eleifend nibh et facilisis. Proin consectetur eu velit at molestie. Mauris nec risus eget diam ullamcorper semper sit amet in augue. Nulla facilisi. Proin posuere ex sit amet sollicitudin luctus. Pellentesque est dui, pellentesque vel aliquet sit amet, auctor et nulla. Nam eget ornare nunc. Ut tincidunt velit eu enim bibendum, sit amet fermentum lectus semper. Praesent auctor ex magna, lobortis molestie tortor finibus id. Proin imperdiet lectus at viverra tincidunt. In tempus turpis nec ligula pharetra, in ultricies lorem venenatis.</p>
                <p>Donec pulvinar purus vel quam ultrices elementum. Vivamus auctor accumsan nunc, eget scelerisque augue aliquam non. Suspendisse potenti. Etiam leo metus, consequat nec luctus ac, viverra nec mi. Pellentesque cursus auctor lacinia. Proin accumsan placerat justo, et dictum purus. Sed arcu erat, pellentesque sed finibus id, ornare vel metus. Integer sem nunc, aliquet feugiat congue in, rhoncus eu orci. Etiam rhoncus urna metus, sed malesuada est vehicula elementum. Nam quis ultricies justo. Curabitur eleifend arcu et vehicula euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ut massa vitae lorem convallis tempus. Ut at posuere tellus. Sed maximus erat non nulla euismod, et commodo ipsum pharetra.</p>

            </div>
            <div id="hemorrhoid-treatment" class="tab-content {{ ($section == 'hemorrhoid-treatment') ? 'current' : '' }}">
                <h3>Hemorrhoid Treatment</h3>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div id="patient-resource" class="tab-content {{ ($section == 'patient-resource') ? 'current' : '' }}">
                <h3>Patient Resources</h3>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="colon-cancer-alliance" class="tab-content {{ ($section == 'colon-cancer-alliance') ? 'current' : '' }}">
                <h3>Colon Cancer</h3>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="contact-us" class="tab-content {{ ($section == 'contact-us') ? 'current' : '' }}">
                <h3>Contact Us</h3>
                Sed ultrices eleifend nibh et facilisis. Proin consectetur eu velit at molestie. Mauris nec risus eget diam ullamcorper semper sit amet in augue. Nulla facilisi. Proin posuere ex sit amet sollicitudin luctus. Pellentesque est dui, pellentesque vel aliquet sit amet, auctor et nulla. Nam eget ornare nunc. Ut tincidunt velit eu enim bibendum, sit amet fermentum lectus semper. Praesent auctor ex magna, lobortis molestie tortor finibus id. Proin imperdiet lectus at viverra tincidunt. In tempus turpis nec ligula pharetra, in ultricies lorem venenatis.
            </div>

        </div>

    </div>
@endsection
