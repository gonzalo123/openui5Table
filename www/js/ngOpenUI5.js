(function () {
    'use strict';

    angular.module('ng.openui5', [])
        .directive('openui5Table', function () {

            function renderColumns(columns, oTable) {
                for (var i = 0; i <= columns.length; i++) {
                    oTable.addColumn(new sap.ui.table.Column(columns[i]));
                }
            }

            var link = function (scope, element) {

                var oData = scope.model.data,
                    oTable = new sap.ui.table.Table(scope.model.conf),
                    oModel = new sap.ui.model.json.JSONModel();

                oModel.setData({modelData: oData});
                renderColumns(scope.model.columns, oTable);

                oTable.setModel(oModel);
                oTable.bindRows("/modelData");
                oTable.sort(oTable.getColumns()[0]);

                oTable.placeAt(element);

                scope.$watch('model.data', function (data) {
                    if (data) {
                        oModel.setData({modelData: data});
                        oModel.refresh();
                    }
                }, true);

            };

            return {
                restrict: 'E',
                scope: {model: '=ngModel'},
                link: link
            };
        });
}());