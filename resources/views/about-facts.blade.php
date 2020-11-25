<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">
        @foreach($facts as $e)
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="{{$e->icon}}"></i>
              <span data-toggle="counter-up">{{$e -> number}}</span>
              <p>{{$e->description}}</p>
            </div>
          </div>
        @endforeach

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">
          @foreach($skills as $e)
          <div class="col-lg-6" data-aos="fade-up">

              <div class="progress">
                <span class="skill">{{$e->language}} <i class="val">{{$e->percentage}}%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{$e->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            @endforeach


          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->