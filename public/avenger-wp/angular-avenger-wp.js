/**
 * Created by lenonleite on 28/07/2016.
 */

var app = angular.module('avenger-wp', []);

app.controller('ScanController' , function($scope,$http) {

    $scope.initScan = function() {
        console.log($("#target").val());
        $http.post('/scan/getDataCoreWp',{url:$("#target").val()} )
            .then(function(res){
                console.log(res);
            });
        // $scope.variaveis.push(angular.copy($scope.novaVariavel));
        // $scope.novaVariavel = '';
    }

});