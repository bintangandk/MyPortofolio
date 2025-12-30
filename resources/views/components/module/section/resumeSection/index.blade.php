<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                        <li><a href="#page-1">Education</a></li>
                        <li><a href="#page-2">Experience</a></li>
                        <li><a href="#page-3">Skills</a></li>
                        {{-- <li><a href="#page-4">Awards</a></li> --}}
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                {{-- Education --}}
                @include('components.module.resumePage.education.index')

                {{-- Experience --}}
                @include('components.module.resumePage.experience.index')

                {{-- Skills --}}
                @include('components.module.resumePage.skills.index')
            </div>
        </div>
    </div>
</section>
