@extends('layouts.layout')

@section('title', 'Dashboard')
@section('content')


    <div class="page-body">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <form action="./" method="get" autocomplete="off" novalidate="" class="sticky-top">
                        <div class="form-label">Filter By Parish</div>
                        <div class="mb-4">

                            @foreach ($parishes as $item)
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-type[]" value="1">
                                    <span class="form-check-label">{{ $item->parish_name }}</span>
                                </label>
                            @endforeach


                        </div>
                        {{-- <div class="form-label">Remote</div>
                <div class="mb-4">
                  <label class="form-check form-switch form-switch-3">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-label form-check-label-on">On</span>
                    <span class="form-check-label form-check-label-off">Off</span>
                  </label>
                </div> --}}
                        <div class="form-label">Parking Prices</div>
                        <div class="mb-4">
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="form-salary" value="1"
                                    checked="">
                                <span class="form-check-label">$1000 per hour</span>
                            </label>
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="form-salary" value="2"
                                    checked="">
                                <span class="form-check-label">$2000 per hour</span>
                            </label>
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="form-salary" value="3">
                                <span class="form-check-label">&gt; $2000</span>
                            </label>
                            {{-- <label class="form-check">
                    <input type="radio" class="form-check-input" name="form-salary" value="4">
                    <span class="form-check-label">Drawing / Painting</span>
                  </label> --}}
                        </div>
                        {{-- <div class="form-label">Immigration</div>
                <div class="mb-4">
                  <label class="form-check form-switch form-switch-3">
                    <input class="form-check-input" type="checkbox">
                    <span class="form-check-label form-check-label-on">On</span>
                    <span class="form-check-label form-check-label-off">Off</span>
                  </label>
                  <div class="small text-secondary">Only show companies that can sponsor a visa</div>
                </div> --}}
                        {{-- <div class="form-label">Location</div>
                <div class="mb-4">
                  <select class="form-select">
                    <option>Anywhere</option>
                    <option>London</option>
                    <option>San Francisco</option>
                    <option>New York</option>
                    <option>Berlin</option>
                  </select>
                </div> --}}
                        <div class="mt-5">
                            <button class="btn btn-primary w-100">Confirm changes</button>
                            <a href="#" class="btn btn-link w-100"> Reset to defaults </a>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">

                    @include('partials.listing')
                    {{-- <div class="row row-cards"> --}}
                    {{-- <div class="space-y">
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-1.jpg)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Lead Tailwind Developer</a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  CMS Max
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  CMS Max
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">PHP</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">Laravel</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">CSS</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">Vue</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-2.png)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Frontend Web Engineer</a></h3>
                            </div>
                            <div class="col-auto fs-3 text-green">$140,000 - $180,000</div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Center Pixel, Inc
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time or Contract
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / Palo Alto, CA
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Center Pixel, Inc
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time or Contract
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / Palo Alto, CA
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">HTML</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">CSS</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">React</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">+3</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-3.png)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Principal Web Application Developer</a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Chicago Botanic Garden
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Hybrid / Chicago Botanic Garden
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Chicago Botanic Garden
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Hybrid / Chicago Botanic Garden
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">HTML</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">PHP</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">Laravel</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-4.png)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Front-End Developer</a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Simple Focus
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Simple Focus
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">HTML</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">PHP</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">CSS</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">+2</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-5.png)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Senior Front-End Engineer</a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Infinia ML
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Durham, NC
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Infinia ML
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Durham, NC
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">HTML</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">PHP</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">CSS</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">+4</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-6.png)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Senior Web Developer, Open Source</a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Crowd Favorite
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Crowd Favorite
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">HTML</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">JavaScript</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">CSS</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">+8</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-7.png)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Frontend Engineer</a></h3>
                            </div>
                            <div class="col-auto fs-3 text-green">$95,000 – $145,000 USD</div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Spear AI
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Washington D.C.
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Spear AI
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Washington D.C.
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">HTML</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">JavaScript</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">CSS</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">+3</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-8.png)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Web Developer</a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Third Time Games
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / North America
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Third Time Games
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / North America
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">PHP</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">Laravel</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">React</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">+8</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="row g-0">
                      <div class="col-auto">
                        <div class="card-body">
                          <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-9.jpg)"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card-body ps-0">
                          <div class="row">
                            <div class="col">
                              <h3 class="mb-0"><a href="#">Laravel Developer</a></h3>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <div class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Mindsize
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-inline-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                              <div class="mt-3 list mb-0 text-secondary d-block d-sm-none">
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/building-community -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                  </svg>
                                  Mindsize
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/license -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path>
                                    <path d="M9 7l4 0"></path>
                                    <path d="M9 11l4 0"></path>
                                  </svg>
                                  Full-time
                                </div>
                                <div class="list-item">
                                  <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-inline icon-2">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                  </svg>
                                  Remote / USA
                                </div>
                              </div>
                            </div>
                            <div class="col-md-auto">
                              <div class="mt-3 badges">
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">PHP</a>
                                <a href="#" class="badge badge-outline text-secondary fw-normal badge-pill">Laravel</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}

                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div id="x"></div>

@endsection
<script>
  document.addEventListener('DOMContentLoaded', () => {
      const x = document.getElementById('x'); 

      function getLocation() {
          if (navigator.geolocation) {
              // Add error handling for getCurrentPosition
              navigator.geolocation.getCurrentPosition(showPosition, handleError);
          } else {
              x.innerHTML = "Geolocation is not supported by this browser.";
          }
      }

      function showPosition(position) {
          x.innerHTML = "Latitude: " + position.coords.latitude +
              "<br>Longitude: " + position.coords.longitude;
      }

      function handleError(error) {
          switch (error.code) {
              case error.PERMISSION_DENIED:
                  x.innerHTML = "User denied the request for Geolocation.";
                  break;
              case error.POSITION_UNAVAILABLE:
                  x.innerHTML = "Location information is unavailable.";
                  break;
              case error.TIMEOUT:
                  x.innerHTML = "The request to get user location timed out.";
                  break;
              case error.UNKNOWN_ERROR:
                  x.innerHTML = "An unknown error occurred.";
                  break;
          }
      }

      
      getLocation();
  });
</script>