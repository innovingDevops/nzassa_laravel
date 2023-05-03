@extends('layouts/admin_master')
@section('content')

<div class="card mb-3">
  <div class="card-header">
      <div class="row flex-between-end">
          <div class="col-auto align-self-center">
              <h5 class="mb-0" data-anchor="data-anchor">Pagination with numbering</h5>
          </div>
      </div>
  </div>

  <div class="card-body pt-0">
      <div class="tab-content">
          <div class="tab-pane preview-tab-pane active" role="tabpanel"
              aria-labelledby="tab-dom-cfcec397-a35c-4994-a54a-50bf30775d88"
              id="dom-cfcec397-a35c-4994-a54a-50bf30775d88">
              <div id="tableExample2"
                  data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                      <table class="table table-bordered table-striped fs--1 mb-0">
                          <thead class="bg-200 text-900">
                              <tr>
                                  <th class="sort" data-sort="name">Name</th>
                                  <th class="sort" data-sort="email">Email</th>
                                  <th class="sort" data-sort="age">Age</th>
                              </tr>
                          </thead>
                          <tbody class="list">
                              <tr>
                                  <td class="name">Anna</td>
                                  <td class="email">anna@example.com</td>
                                  <td class="age">18</td>
                              </tr>
                              <tr>
                                  <td class="name">Homer</td>
                                  <td class="email">homer@example.com</td>
                                  <td class="age">35</td>
                              </tr>
                              <tr>
                                  <td class="name">Oscar</td>
                                  <td class="email">oscar@example.com</td>
                                  <td class="age">52</td>
                              </tr>
                              <tr>
                                  <td class="name">Emily</td>
                                  <td class="email">emily@example.com</td>
                                  <td class="age">30</td>
                              </tr>
                              <tr>
                                  <td class="name">Jara</td>
                                  <td class="email">jara@example.com</td>
                                  <td class="age">25</td>
                              </tr>
                              <tr>
                                  <td class="name">Clark</td>
                                  <td class="email">clark@example.com</td>
                                  <td class="age">39</td>
                              </tr>
                              <tr>
                                  <td class="name">Jennifer</td>
                                  <td class="email">jennifer@example.com</td>
                                  <td class="age">52</td>
                              </tr>
                              <tr>
                                  <td class="name">Tony</td>
                                  <td class="email">tony@example.com</td>
                                  <td class="age">30</td>
                              </tr>
                              <tr>
                                  <td class="name">Tom</td>
                                  <td class="email">tom@example.com</td>
                                  <td class="age">25</td>
                              </tr>
                              <tr>
                                  <td class="name">Michael</td>
                                  <td class="email">michael@example.com</td>
                                  <td class="age">39</td>
                              </tr>
                              <tr>
                                  <td class="name">Antony</td>
                                  <td class="email">antony@example.com</td>
                                  <td class="age">39</td>
                              </tr>
                              <tr>
                                  <td class="name">Raymond</td>
                                  <td class="email">raymond@example.com</td>
                                  <td class="age">52</td>
                              </tr>
                              <tr>
                                  <td class="name">Marie</td>
                                  <td class="email">marie@example.com</td>
                                  <td class="age">30</td>
                              </tr>
                              <tr>
                                  <td class="name">Cohen</td>
                                  <td class="email">cohen@example.com</td>
                                  <td class="age">25</td>
                              </tr>
                              <tr>
                                  <td class="name">Rowen</td>
                                  <td class="email">rowen@example.com</td>
                                  <td class="age">39</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  <div class="d-flex justify-content-center mt-3">
                      <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                          data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="pagination mb-0"></ul>
                      <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                          data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
                <div class="row">
            <div class="col-12">
              <div class="card mb-3 btn-reveal-trigger">
                <div class="card-header position-relative min-vh-25 mb-8">
                  <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url(../../assets/img/generic/4.jpg);">
                    </div>
                    <!--/.bg-holder-->

                    <input class="d-none" id="upload-cover-image" type="file" />
                    <label class="cover-image-file-input" for="upload-cover-image"><span class="fas fa-camera me-2"></span><span>Change cover photo</span></label>
                  </div>
                  <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative"> <img src="../../assets/img/team/2.jpg" width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" />
                      <input class="d-none" id="profile-image" type="file" />
                      <label class="mb-0 overlay-icon d-flex flex-center" for="profile-image"><span class="bg-holder overlay overlay-0"></span><span class="z-index-1 text-white dark__text-white text-center fs--1"><span class="fas fa-camera"></span><span class="d-block">Update</span></span></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-8 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-light">
                  <form class="row g-3">
                    <div class="col-lg-6">
                      <label class="form-label" for="first-name">First Name</label>
                      <input class="form-control" id="first-name" type="text" value="Anthony" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="last-name">Last Name</label>
                      <input class="form-control" id="last-name" type="text" value="Hopkins" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email1">Email</label>
                      <input class="form-control" id="email1" type="text" value="anthony@gmail.com" />
                    </div>
                    <div class="col-lg-6">
                      <label class="form-label" for="email2">Phone</label>
                      <input class="form-control" id="email2" type="text" value="+44098098304" />
                    </div>
                    <div class="col-lg-12">
                      <label class="form-label" for="email3">Heading</label>
                      <input class="form-control" id="email3" type="text" value="Software Engineer" />
                    </div>
                    <div class="col-lg-12">
                      <label class="form-label" for="intro">Intro</label>
                      <textarea class="form-control" id="intro" name="intro" cols="30" rows="13">Dedicated, passionate, and accomplished Full Stack Developer with 9+ years of progressive experience working as an Independent Contractor for Google and developing and growing my educational social network that helps others learn programming, web design, game development, networking. I’ve acquired a wide depth of knowledge and expertise in using my technical skills in programming, computer science, software development, and mobile app development to developing solutions to help organizations increase productivity, and accelerate business performance. It’s great that we live in an age where we can share so much with technology but I’m but I’m ready for the next phase of my career, with a healthy balance between the virtual world and a workplace where I help others face-to-face. There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and the big picture. I can also implement the technologies that successful projects need.</textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                      <button class="btn btn-primary" type="submit">Update </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4 ps-lg-2">
              <div class="sticky-sidebar">
                
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                  </div>
                  <div class="card-body bg-light">
                    <form>
                      <div class="mb-3">
                        <label class="form-label" for="old-password">Old Password</label>
                        <input class="form-control" id="old-password" type="password" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="new-password">New Password</label>
                        <input class="form-control" id="new-password" type="password" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="confirm-password">Confirm Password</label>
                        <input class="form-control" id="confirm-password" type="password" />
                      </div>
                      <button class="btn btn-primary d-block w-100" type="submit">Update Password </button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.14.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div>
                <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-name">Name</label>
                    <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-email">Email address</label>
                    <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                  </div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-password">Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                    </div>
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                  </div>
                </form>
                <div class="position-relative mt-5">
                  <hr />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection
                