@extends('layouts.guest')

@section('content')
<div class="page-wrapper">
    <!-- BEGIN PAGE HEADER -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">Frequently Asked Questions</h2>
          </div>
          <!-- Page title actions -->
          <div class="col-auto ms-auto d-print-none">
            <div class="d-flex">
              <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
                <li class="breadcrumb-item"><a href="#">Tabler</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Pages</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE HEADER -->
    <!-- BEGIN PAGE BODY -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card card-lg">
          <div class="card-body">
            <div class="space-y-4">
              <div>
                <h2 class="mb-3">1. Introduction</h2>
                <div id="faq-1" class="accordion" role="tablist" aria-multiselectable="true">
                  <div class="accordion-item">
                    <button class="accordion-header" data-bs-toggle="collapse" data-bs-target="#faq-1-1" role="tab">
                      <h4 class="accordion-header-text">Welcome to our service!</h4>
                    </button>
                    <div id="faq-1-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-1">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <button class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-2" role="tab">
                      <h4 class="accordion-header-text">Who are we?</h4>
                    </button>
                    <div id="faq-1-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <button class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-3" role="tab">
                      <h4 class="accordion-header-text">What are our values?</h4>
                    </button>
                    <div id="faq-1-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <h2 class="mb-3">2. Functionality</h2>
                <div id="faq-2" class="accordion" role="tablist" aria-multiselectable="true">
                  <div class="accordion-item">
                    <button class="accordion-header" data-bs-toggle="collapse" data-bs-target="#faq-2-1" role="tab">
                      <h4 class="accordion-header-text">What are the key features?</h4>
                    </button>
                    <div id="faq-2-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-2">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <button class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-2" role="tab">
                      <h4 class="accordion-header-text">Does your App support mobile devices?</h4>
                    </button>
                    <div id="faq-2-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <button class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-3" role="tab">
                      <h4 class="accordion-header-text">Why should I choose your service?</h4>
                    </button>
                    <div id="faq-2-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <button class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-4" role="tab">
                      <h4 class="accordion-header-text">Is my data secure?</h4>
                    </button>
                    <div id="faq-2-4" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <h2 class="mb-3">3. Payments</h2>
                <div id="faq-3" class="accordion" role="tablist" aria-multiselectable="true">
                  <div class="accordion-item">
                    <button class="accordion-header" data-bs-toggle="collapse" data-bs-target="#faq-3-1" role="tab">
                      <h4 class="accordion-header-text">Is there any free plan?</h4>
                    </button>
                    <div id="faq-3-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-3">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <button class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-2" role="tab">
                      <h4 class="accordion-header-text">What are the available payment options?</h4>
                    </button>
                    <div id="faq-3-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <button class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-3" role="tab">
                      <h4 class="accordion-header-text">Can I get a refund?</h4>
                    </button>
                    <div id="faq-3-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                      <div class="accordion-body pt-0">
                        <div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum
                            in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE BODY -->
    <!--  BEGIN FOOTER  -->
    <footer class="footer footer-transparent d-print-none">
      <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
          <div class="col-lg-auto ms-lg-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
              <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
              <li class="list-inline-item">
                <a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-pink icon-inline icon-4">
                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                  </svg>
                  Sponsor
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                Copyright © 2025
                <a href="." class="link-secondary">Tabler</a>. All rights reserved.
              </li>
              <li class="list-inline-item">
                <a href="./changelog.html" class="link-secondary" rel="noopener"> v1.1.1 </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--  END FOOTER  -->
  </div>
@endsection