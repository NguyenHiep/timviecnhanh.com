@extends('layouts.manage')
@section('title', __('Task Management'))
@section('content')
  <div class="row">
    <div class="col-xl-12">
      <div class="page-title-box">
        <h4 class="page-title float-left">Tasks</h4>
        <ol class="breadcrumb float-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Tasks</a></li>
          <li class="breadcrumb-item active">List</li>
        </ol>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div id="section_content">
    <div class="row">
      <div class="col-12">
        <div class="card-box">
          <div class="table-rep-plugin" style="position: relative">
            <div class="btn-toolbar">
              <div class="btn-group focus-btn-group">
                <a href="javascript:void(0)" class="btn btn-default btn-primary" data-toggle="modal" data-target="#add_task" @click="createTask()"><i class="fa fa-plus"></i> Create new</a>
                <a href="{{ route('task.exportcsv') }}" class="btn btn-default btn-primary"><i class="zmdi zmdi-download"></i> Export csv</a>
                <a class="btn btn-default btn-primary" data-toggle="collapse" href="#collapseFilters" role="button" aria-expanded="false" aria-controls="collapseFilters"><i class="zmdi zmdi-search"></i> Filters</a>
              </div>
              <div class="btn-group dropdown-btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Display <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li class="checkbox-row"  v-for="(value, key, index)  in columns" :key="index">
                    <input type="checkbox" :name="key" :id="key" :value="true" v-model="columns[key].show" />
                    <label :for="key">@{{ value.label }}</label>
                  </li>
               </ul>
              </div>
            </div>
            <div class="toolbar-filters mb-4">
              <div id="collapseFilters" class="collapse">
                <div class="form-filters">
                  <form action="" method="POST" autocomplete="off" class="row" @submit.prevent="queryFilter()">
                    <div class="form-group col-12 col-lg-4">
                      <label for="id">Task id:</label>
                      <input type="text" class="form-control" id="id" placeholder="" v-model="querySearch.id" />
                    </div>
                    <div class="form-group col-12 col-lg-4">
                      <label for="name">Task name:</label>
                      <input type="text" class="form-control" id="name" v-model="querySearch.task_name" />
                    </div>
                    <div class="form-group col-12 col-lg-4">
                      <label for="status">Status:</label>
                      <select name="status" id="status" class="form-control" v-model="querySearch.status">
                        <option value="">Choose a status ...</option>
                        <option v-for="(status, key) in task_status" :value="key">@{{ status }}</option>
                      </select>
                    </div>
                    <div class="form-group col-12 col-lg-4">
                      <label for="assign_user_id">Assign:</label>
                      <select name="assign_user_id" id="assign_user_id" class="form-control" v-model="querySearch.assign_user_id">
                        <option value="">Choose a user...</option>
                        <option v-for="(user, key) in assign_users" :value="key">@{{user}}</option>
                      </select>
                    </div>
                    <div class="form-group col-12 col-lg-4">
                      <label for="start_date">Start date:</label>
                      <input type="date" class="form-control" id="start_date" v-model="querySearch.start_date" />
                    </div>
                    <div class="form-group col-12 col-lg-4">
                      <label for="end_date">End date:</label>
                      <input type="date" class="form-control" id="end_date" v-model="querySearch.end_date" />
                    </div>
                    <div class="col form-group text-right">
                      <button type="button" class="btn btn-default">Reset Filters</button>
                      <button type="submit" class="btn btn-primary">Filters</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <i v-if="loading" class="fa fa-spin fa-spinner loading-list" style="color: #64b0f2; font-size: 50px;text-align: center;position: absolute;left: 50%;top: 50%; z-index: 10; "></i>
            <template>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead class="thead-default">
                  <tr>
                    <th class="checkbox checkbox-primary">
                      <input type="checkbox" id="checkBoxAll" class="checkbox-list"/>
                      <label for="checkBoxAll" class="label-list"></label>
                    </th>
                    <th v-for="(value, key, index)  in columns" :key="index" v-if="value.show">@{{ value.label }}</th>
                  </tr>
                  </thead>
                  <tbody>
                  <template v-if="tasks && tasks.length">
                    <tr v-for="task in tasks" :key="task.id">
                      <th class="checkbox checkbox-primary">
                        <input type="checkbox"  class="checkbox-list" :value="task.id"/>
                        <label for="" class="label-list"></label>
                      </th>
                      <td v-for="(value, key, index)  in columns" :key="index" v-if="value.show">
                       <template v-if="key === 'action'">
                         <a href="#" title="Edit" class="edit-row" data-toggle="modal" data-target="#add_task" @click="editTask(task)"><i class="zmdi zmdi-edit"></i></a>
                         <a href="#" title="Delete" class="delete-row" @click="isConfirmDelete(task)"><i class="zmdi zmdi-delete"></i></a>
                       </template>
                        <template v-else>
                          @{{task[key]}}
                        </template>
                      </td>
                    </tr>
                  </template>
                  <template  v-else>
                    <tr>
                      <td colspan="9"> Data empty</td>
                    </tr>
                  </template>
                  </tbody>
                </table>
              </div>
              <pagination v-if="pagination.last_page > 1" :pagination="pagination" :offset="10" @paginate="fetchTasks()"></pagination>
            </template>
          </div>
        </div>
        <!-- Modal Add task -->
        <template>
          <div class="modal fade none-border" id="add_task">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">@{{ action === 'create' ? 'Add a task' : 'Edit a task'}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body p-20">
                  <form role="form" @change="errors.clear($event.target.name)">
                    <div class="row mb-2">
                      <div class="col-md-6" :class="getValidateFiled('name')">
                        <label class="control-label">Task name</label>
                        <input class="form-control form-white" name="name" placeholder="Enter name" type="text"  v-model="item.name" required="required"/>
                        <span class="text-danger" v-text="errors.get('name')"></span>
                      </div>
                      <div class="col-md-6" :class="getValidateFiled('assign_user_id')">
                        <label class="control-label">Assign to</label>
                        <select class="form-control form-white" name="assign_user_id" v-model="item.assign_user_id">
                          <option value="">Choose a user...</option>
                          <option v-for="(user, key) in assign_users" :value="key">@{{user}}</option>
                        </select>
                        <span class="text-danger" v-text="errors.get('assign_user_id')"></span>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-6" :class="getValidateFiled('start_date')">
                        <label class="control-label">Start date</label>
                        <input class="form-control form-white" name="start_date" type="date" v-model="item.start_date" required="required"/>
                        <span class="text-danger" v-text="errors.get('start_date')"></span>
                      </div>
                      <div class="col-md-6" :class="getValidateFiled('end_date')">
                        <label class="control-label">End date</label>
                        <input class="form-control form-white" name="end_date" type="date" v-model="item.end_date" required="required" />
                        <span class="text-danger" v-text="errors.get('end_date')"></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" :class="getValidateFiled('description')">
                        <label class="control-label">Description</label>
                        <textarea class="form-control form-white" cols="30" rows="5" name="description" v-model="item.description"></textarea>
                        <span class="text-danger" v-text="errors.get('description')"></span>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                  <button v-if="action === 'create'" type="button" class="btn btn-danger waves-effect waves-light save-category" @click.prevent="storeTask()">
                    <i class="fa fa-spin fa-spinner" v-if="loadingCreate"></i> Save and Close
                  </button>
                  <button v-else type="button" class="btn btn-danger waves-effect waves-light save-category" @click.prevent="updateTask()">
                    <i class="fa fa-spin fa-spinner" v-if="loadingCreate"></i> Update and Close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </template>
        <!-- END MODAL -->
      </div>
    </div>
  </div>
@endsection
@push('styles')
<link href="{{ asset('css/pluginsList.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('plugins')
<script src="{{ asset('js/pluginsList.js') }}"></script>
@endpush
@push('scripts')
@endpush