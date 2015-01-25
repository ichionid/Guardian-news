/**
 * Renders latest guardian news.
 */
var app = angular.module('drupalGuardianApp', [])
  .controller('DrupalGuardianLatestNews', function ($scope, $http, $log) {
    // Set default values for our form fields.
    var url = Drupal.settings.guardian_latest_news.url; 
    var apiKey = Drupal.settings.guardian_latest_news.apiKey;
    var pageSize = Drupal.settings.guardian_latest_news.pageSize;
    var orderBy = Drupal.settings.guardian_latest_news.orderBy;
    var sections = Drupal.settings.guardian_latest_news.sections;
    var moreText = Drupal.settings.guardian_latest_news.moreText;
    var q = Drupal.settings.guardian_latest_news.q;
    $scope.more = Drupal.settings.guardian_latest_news.more;
    // Define a function to process form submission.
    $scope.page = 1;
    $scope.change = function () {
      // Fetch the data from the public API through JSONP.
      $http.jsonp(url, {params: {
          'api-key': apiKey,
          'page': $scope.page,
          'page-size': pageSize,
          'q': q,
          'moreText': moreText,
          'sections': sections,
          'order-by': orderBy,
          callback: 'JSON_CALLBACK'
        }}).
        success(function (data, status, headers, config) {
          if (angular.isUndefined($scope.articles)) {
            $scope.articles = data.response.results;          
          } else {
            $scope.articles.push.apply($scope.articles, data.response.results);            
          }
          $scope.page = $scope.page+1;
        }).
        error(function (data, status, headers, config) {
          // Log an error in the browser's console.
          $log.error('Could not retrieve data from ' + url);
        });
    };

    // Trigger form submission for first load.
    $scope.change();
  });