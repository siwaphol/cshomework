class UserTableController{
    constructor(NgTableParams,$state){
        'ngInject';

        this.NgTableParams = NgTableParams;
        this.$state = $state;
    }

    $onInit(){
        this.data = [{name: "Moroni", age: 50}];
        this.selected = [];
        this.query = {
            order: 'name',
            limit: 5,
            page: 1
        };
        this.tableParams = new this.NgTableParams({}, { dataset: this.data});
    }
}

export const UserTableComponent = {
    templateUrl: './views/app/components/user-table/user-table.component.html',
    controller: UserTableController,
    controllerAs: 'vm',
    bindings: {}
}
