(function () {
    'use strict';

    angular.module('G', ['ui.bootstrap', 'ui.router', 'ng.openui5'])

        .value('config', {
            apiUrl: '/api'
        })

        .config(function ($stateProvider, $urlRouterProvider) {
            $urlRouterProvider.otherwise("/");
            $stateProvider
                .state('home', {
                    url: "/",
                    templateUrl: "partials/home.html",
                    controller: 'HomeController'
                });
        })

        .controller('HomeController', function ($scope, $http, $log, config) {
            $scope.refresh = function () {
                $http.get(config.apiUrl + '/gridData').success(function (data) {
                    $scope.datagrid.data = data;
                });
            };

            $scope.datagrid = {
                conf: {
                    title: "Table example",
                    navigationMode: sap.ui.table.NavigationMode.Paginator
                },
                columns: [
                    {
                        label: new sap.ui.commons.Label({text: "Last Name"}),
                        template: new sap.ui.commons.TextView().bindProperty("text", "lastName"),
                        sortProperty: "lastName",
                        filterProperty: "lastName",
                        width: "200px"
                    }, {
                        label: new sap.ui.commons.Label({text: "First Name"}),
                        template: new sap.ui.commons.TextField().bindProperty("value", "name"),
                        sortProperty: "name",
                        filterProperty: "name",
                        width: "100px"
                    }, {
                        label: new sap.ui.commons.Label({text: "Checked"}),
                        template: new sap.ui.commons.CheckBox().bindProperty("checked", "checked"),
                        sortProperty: "checked",
                        filterProperty: "checked",
                        width: "75px",
                        hAlign: "Center"
                    }, {
                        label: new sap.ui.commons.Label({text: "Web Site"}),
                        template: new sap.ui.commons.Link().bindProperty("text", "linkText").bindProperty("href", "href"),
                        sortProperty: "linkText",
                        filterProperty: "linkText"
                    }, {
                        label: new sap.ui.commons.Label({text: "Image"}),
                        template: new sap.ui.commons.Image().bindProperty("src", "src"),
                        width: "75px",
                        hAlign: "Center"
                    }, {
                        label: new sap.ui.commons.Label({text: "Gender"}),
                        template: new sap.ui.commons.ComboBox({
                            items: [
                                new sap.ui.core.ListItem({text: "female"}),
                                new sap.ui.core.ListItem({text: "male"})
                            ]
                        }).bindProperty("value", "gender"),
                        sortProperty: "gender",
                        filterProperty: "gender"
                    }, {
                        label: new sap.ui.commons.Label({text: "Rating"}),
                        template: new sap.ui.commons.RatingIndicator().bindProperty("value", "rating"),
                        sortProperty: "rating",
                        filterProperty: "rating"
                    }

                ]
            };
        })
    ;
}());