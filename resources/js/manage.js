window._ = require('lodash');
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import tasks from './config';
import VueSweetalert2 from 'vue-sweetalert2';
import fullCalendar from 'vue-fullcalendar'

Vue.component('pagination', require('./components/manage/PaginationComponent.vue'));
Vue.use(VueSweetalert2);
Vue.component('full-calendar', fullCalendar);

class Errors {
  constructor() {
    this.errors = {};
  }

  get(field) {
    if (this.errors[field]) {
      return this.errors[field][0];
    }
  }

  record(errors) {
    this.errors = errors;
  }

  clear(field){
    delete this.errors[field];
  }

  clearAll(){
    return this.errors = {};
  }

}
var vm = new Vue({
  el: '#section_content',
  data: {
    loading: false,
    loadingCreate: false,
    action: 'create',
    columns: {
      "id": {
        "label": "ID",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      },
      "name": {
        "label": "Task name",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      },
      "start_date": {
        "label": "Start date",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      },
      "end_date": {
        "label": "End date",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      },
      "status": {
        "label": "Status",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      },
      "assign_user_id": {
        "label": "Assign",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      },
      "created_at": {
        "label": "Create day",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      },
      "action": {
        "label": "Action",
        "searchable": true,
        "orderable": true,
        "show": true,
        "sort": 'desc'
      }
    },
    item: {},
    tasks: [],
    assign_users: {
      "1": "Nguyen Hiep",
      "2": "Dong Hoang",
      "3": "Tuyen Vo",
      "4": "Nam Em",
      "5": "Phuc Nguyen",
      "6": "Minh Tranh",
      "7": "Hoa Tran",
      "8": "Tu Oanh"
    },
    task_status: {
      0: "PENDING",
      1: "TODO",
      2: "DOING",
      3: "DONE",
      4: "CLOSE",
    },
    errors: new Errors(),
    pagination: {
      'current_page': 1
    },
    fcEvents: [
      {
        title: 'Sunny Out of Office',
        start: '2018-11-02',
        end: '2018-11-03',
        cssClass: 'red',
        description: 'Mô tả nội dung'
      },
      {
        title: 'Sunny Out of Office2',
        start: '2018-11-05',
        end: '2018-11-07',
        cssClass: 'green',
        description: 'Mô tả nội dung2'
      },
      {
        title: 'Sunny Out of Office3',
        start: '2018-11-05',
        end: '2018-11-07',
        cssClass: 'green',
        description: 'Mô tả nội dung3'
      },
      {
        title: 'Sunny Out of Office4',
        start: '2018-11-05',
        end: '2018-11-07',
        cssClass: 'green',
        description: 'Mô tả nội dung4'
      },
      {
        title: 'Sunny Out of Office5',
        start: '2018-11-05',
        end: '2018-11-07',
        cssClass: 'green',
        description: 'Mô tả nội dung5'
      },
      {
        title: 'Sunny Out of Office6',
        start: '2018-11-05',
        end: '2018-11-07',
        cssClass: 'green',
        description: 'Mô tả nội dung6'
      }
    ],
    querySearch: {
      'id': '',
      'task_name': '',
      'status': '',
      'assign_user_id': '',
      'start_date': '',
      'end_date': ''
    }
  },
  methods: {
    initTasks: function () {
      return {
        'name': '',
        'description': '',
        'start_date': '',
        'end_date': '',
        'status': 0,
        'assign_user_id': ''
      };
    },
    fetchTasks: function() {
      this.loading = true;
      axios.get(tasks + '?page=' + this.pagination.current_page).then(response => {
        this.tasks      = response.data.data.data.data;
        this.pagination = response.data.data.pagination;
        var self        = this;
        setTimeout(function () {
          self.loading = false;
        }, 500);
      }).catch(error => {
        console.log(error.response.data);
      });
    },
    storeTask: function () {
      this.loadingCreate = true;
      var self = this,
          item = {
          'name': this.item.name,
          'description': this.item.description,
          'start_date': this.item.start_date,
          'end_date': this.item.end_date,
          'status': this.item.status,
          'assign_user_id': this.item.assign_user_id
        };
      axios.post(tasks, item).then(response => {
        if(response.data.status){
          // Change state list
          this.tasks = this.fetchTasks();
          //this.tasks.unshift(response.data.data);
          // Reset when create success
          this.resetForm();
          setTimeout(function () {
            self.loadingCreate = false;
          }, 500);
          this.errors.clearAll();
        }else{
         // self.errors = response.data.data;
          this.errors.record(response.data.data)
        }
      }).catch(error => {
        this.errors.record(error.response.data)
      });
    },
    createTask: function(){
      this.action = 'create';
      this.resetForm();
    },
    editTask: function(task){
      this.action = 'edit';
      //this.loading = true;
      axios.get(tasks + '/' + task.id + '/edit').then(response => {
        this.item = response.data.data;
      }).catch(error => {
        console.log(error.response.data);
      });
    },
    updateTask: function(){
      this.loadingCreate = true;
      var self = this,
          item = {
            'name': this.item.name,
            'description': this.item.description,
            'start_date': this.item.start_date,
            'end_date': this.item.end_date,
            'status': this.item.status,
            'assign_user_id': this.item.assign_user_id
          };
      axios.put(tasks + '/' + this.item.id, item).then(response => {
        if(response.data.status){
          this.item  = item;
          this.tasks = this.fetchTasks();
          setTimeout(function () {
            self.loadingCreate = false;
          }, 500);
          this.errors.clearAll();
        }else{
          // self.errors = response.data.data;
          this.errors.record(response.data.data)
        }
      }).catch(error => {
        this.errors.record(error.response.data)
      });
    },
    deleteTask: function (task) {
      var self = this;
      axios.delete(tasks + '/' + task.id).then(response => {
        console.log(response.data);
        if(response.data.status){
          self.tasks = self.fetchTasks(); // Refresh list
          this.$swal('Deleted', 'You successfully deleted this item', 'success')
        }else{
          self.errors = response.data.data;
          this.$swal('Deleted', 'Error deleted item', 'error')
        }
      }).catch(function (error) {
        console.log(error);
      });
    },
    resetForm: function () {
      this.item = this.initTasks();
    },
    isConfirmDelete: function(task) {
      var self = this;
      this.$swal({
        title: 'Are you sure?',
        text: 'Do you want delete item ?',
        type: 'warning',
        showCancelButton: true,
        cancelButtonClass: 'btn-default btn-secondary waves-effect',
        confirmButtonClass: 'btn-danger waves-effect waves-light',
        confirmButtonText: 'Yes Delete it!',
        cancelButtonText: 'Cancel',
        showCloseButton: true,
        showLoaderOnConfirm: true,
        allowOutsideClick: false,
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          this.$swal.isLoading();
          // Call function deleteTask
          self.deleteTask(task);
        } // End if
      }) // End then
    },
    getValidateFiled: function(field){
      return this.errors[field] ? ' has-danger' : '';
    },
    queryFilter: function () {
      //TODO: Logic filter search
      //let self = this;
      if (this.querySearch['id'] === '' && this.querySearch['task_name'] === '' &&
        this.querySearch['status'] === '' && this.querySearch['assign_user_id'] === '' &&
        this.querySearch['start_date'] === '' && this.querySearch['end_date'] === '') {
        //return this.tasks;
      }

     /* this.tasks =  this.tasks.filter((task) => {
        return task['id'].toString().toLowerCase().indexOf(this.querySearch['id'].toString().toLowerCase()) >= 0;
      });*/
    }
  },
  mounted() {
    // Init
    this.fetchTasks();
    this.item = this.initTasks();
  },
  computed: {

  }
});