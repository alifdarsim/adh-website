<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Asia Deal</title>
  <link rel="favicon" href="assets/images/favicon.webp">
  <link rel="stylesheet" href="assets/css/font-iner.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
  <link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/nav.css">
</head>
<body>
<div id="app" class="layout language-en">
    <div id="content" class="site-content layout-full">
    @include('layouts.header')

    <div class="page-container">
        <main class="site-main">
          <div class="page-content">
            <!-- Header -->
            <header id="head" style="background: linear-gradient(90deg, black 14%, rgba(0, 0, 0, 0.09) 92%, rgba(0, 0, 0, 0) 100%), 
            #181015 url(assets/images/banner15.webp) no-repeat;background-size: cover;background-position: center;">
              <div class="container">
                <div class="heading" style="margin-bottom: 3.5rem;">
                  <h1>
                    Insights and <br>Inspiration</h1>
                  <p id="p2">
                    Stay Informed, Stay Inspired, Stay Connected
                  </p>

                </div>

              </div>
            </header>
          </div>
        </main>
        <div id="imexp">
          <div class="col-xs-12 col-md-6" style="padding: 0; display: flex;">
            <img src="assets/images/new-images/blog.jpg" style="width: 100%; height: 550px">
          </div>
          <div class="col-xs-12 col-md-6" style="background: rgba(5, 9, 35, 1);display: flex; 
          flex-direction: column; align-items: stretch;" id="exp2">
            <div class="col-md-12" style="padding: 20px;">
              <div class="row">
                <div class="col-md-12 text-md-right">
                  <a href="javascript:void(0);" onclick="handleClickGoBack()">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="43.5" y="43.2778" width="43" height="42.5563" rx="21.2782" transform="rotate(-180 43.5 43.2778)" stroke="white" />
                      <path d="M17.8284 22.9996L23.1924 28.3636L21.7782 29.7778L14 21.9996L21.7782 14.2215L23.1924 15.6357L17.8284 20.9996L30 20.9996L30 22.9996L17.8284 22.9996Z" fill="white" />
                    </svg>
                  </a>
                  <a href="javascript:void(0);" onclick="handleClickGoAhead()">
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" y="0.72168" width="43" height="42.5563" rx="21.2782" stroke="white" />
                      <path d="M26.1716 20.9999L20.8076 15.6359L22.2218 14.2217L30 21.9999L22.2218 29.778L20.8076 28.3638L26.1716 22.9999H14V20.9999H26.1716Z" fill="white" />
                    </svg>
                  </a>
                </div>
              </div>
              <p id="p2">
              <h6 style="color:#DC1010">INDUSTRY</h6>
              <h4 id="blog-h">Leveraged<br>
                Customer<br>
                Feedback for<br>
                Improved Services</h4><br>
              <p id="p2" style="font-size:18px;">Static websites are now used to bootstrap lots of
                websites and are becoming the basis for a
                variety...
              </p><br>
              <a href="blog-inside.php" class="btn btn-info btn-xs" role="button" style="width:200px">READ MORE</a>
              </p>
            </div>

          </div>
        </div>

      </div>

    </div>
  </div>


  <div class="page-container3 serviceslist" style="background:#E5E7EB">
    <div class="container" id="spacing">
      <div class="row">
        <div class="col-md-12">
          <header class="heading">
            <h2>Latest Article</h2>

          </header>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-18 col-sm-12 col-md-12">
          <div class="thumbnail">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-6">
                  <div class="input-field">
                    <select id="insightTypeDropdown">
                      <option value="" disabled selected>Insight Type: All</option>
                      @foreach ($pagetype as $pagetype_get)
                     <option value="{{ $pagetype_get->id }}">{{ $pagetype_get->type_name }}</option>
        @endforeach

                    </select>

                  </div>
                  <!-- Add more filter fields as needed -->
                </div>
                <div class="col-md-6">
                  <div class="input-field">
                    <select id="menuFilterDropdown">
                    <option value="">All</option>
        @foreach ($menus as $menu)
                     <option value="{{ $menu->id }}">{{ $menu->menu_title }}</option>
        @endforeach

                    </select>

                  </div>
                  <!-- Add more filter fields as needed -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                  <div class="search-form text-md-right">

                    <div class="input-field">
                      <div class="input left-inner-addon input-container">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" id="searchInput" placeholder="Search">
                      </div>
                    </div>
                    <!-- Add more search fields as needed -->
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
      
      @foreach($resources as $resource)
        <div class="col-xs-18 col-sm-6 col-md-4">
          <a href="{{ route('resource.details', ['slug' => $resource->slug]) }}">
          <div class="thumbnail">
            <img src="{{ asset($resource->banner) }}" style="height:200px;width:100%;" />
            <div class="caption">
              <p style="color:#DC1010;font-size:12px"><b style="color:#DC1010">TIPS</b></p>
              <p style="font-size:12px"><b style="color:black">{{ \Carbon\Carbon::parse($resource->date)->format('M d Y') }}</b></p>
              <h4>{{ $resource->title }}</h4>
              <p>{{ $resource->description }}
              </p>

            </div>
          </div>
         </a>
        </div>
        @endforeach
      
      </div><!-- End row -->

      <!-- Pagination Links -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <nav class="pagination-container" aria-label="Page navigation">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($resources->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $resources->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    @foreach ($resources as $page => $url)
    @if (is_string($page))
        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $page }}</span></li>
    @else
    
        @php
            $pageNumber = $page + 1;
        @endphp
        <li class="page-item {{ $pageNumber == $resources->currentPage() ? 'active' : '' }}">
            <a class="page-link" href="{{ $resources->url($pageNumber) }}">{{ $pageNumber }}</a>
        </li>
    @endif
@endforeach
                    {{-- Next Page Link --}}
                    @if ($resources->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $resources->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
        <div class="col-md-4"></div>
      </div><!-- End row -->

    </div><!-- End container -->
  </div>

  @include('layouts.footer')
  <script src="assets/js/navigation.js"></script>
  <script src="assets/js/common.js"></script>

  <script>
    function navigateToPage(pageUrl) {
      window.location.href = pageUrl;
    }
  </script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Attach change event handlers
        $('#insightTypeDropdown, #menuFilterDropdown, #searchInput').change(function() {
            fetchFilteredResources();
        });
        
        // Function to fetch filtered resources
        function fetchFilteredResources() {
            var insightType = $('#insightTypeDropdown').val();
            var menuFilter = $('#menuFilterDropdown').val();
            var searchQuery = $('#searchInput').val();

            // Send AJAX request
            $.ajax({
                url: '/filter-resources',
                method: 'GET',
                data: {
                    insight_type: insightType,
                    menu_filter: menuFilter,
                    search_query: searchQuery
                },
                success: function(data) {
                    // Update resources container with filtered data
                    $('#resourcesContainer').html(data);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching filtered resources:', error);
                }
            });
        }
    });
</script>

</body>
</html>
