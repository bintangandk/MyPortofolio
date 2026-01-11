@extends('layouts.app')

@section('content')
    @include('components.module.section.sectionHome.index')

    @include('components.module.section.aboutSection.index')

    @include('components.module.section.resumeSection.index')

    @include('components.module.section.serviceSection.index')

    @include('components.module.section.projectsSection.index')

    @include('components.module.section.contactSection.index')
@endsection
