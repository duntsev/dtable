<!-- Шаблоны форм для dTable -->
<div id="dTableFilterElements">
  <!-- Форма фильтр - input -->
  <div class="modal dTableFilterTextModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="" aria-label="">
            <button class="btn btn-outline-secondary input-text-reset-button" type="button"><i class="fa fa-times"></i></button>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button type="button" class="btn btn-primary">Применить</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Форма фильтр - выбор из справочника + all -->
  <div class="modal dTableFilterSelectModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input class="form-control" type="text" value="">
          <div class="list"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button type="button" class="btn btn-primary">Применить</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Форма фильтр - интервал дат -->
  <div class="modal dTableFilterDateIntervalModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <input type="text" class="form-control date-1 datepickerModal" placeholder="" aria-label="" autocomplete="off">
            <button class="btn btn-outline-secondary input-text-reset-button" type="button"><i class="fa fa-times"></i></button>
            <span class="input-group-text">-</span>
            <input type="text" class="form-control date-2 datepickerModal" placeholder="" aria-label="" autocomplete="off">
            <button class="btn btn-outline-secondary input-text-reset-button" type="button"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button type="button" class="btn btn-primary">Применить</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Форма фильтр - интервал -->
  <div class="modal dTableFilterIntervalModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <input type="number" class="form-control num-1 " placeholder="От" aria-label="" autocomplete="off">
            <button class="btn btn-outline-secondary input-text-reset-button" type="button"><i class="fa fa-times"></i></button>
            <span class="input-group-text">-</span>
            <input type="number" class="form-control num-2 " placeholder="До" aria-label="" autocomplete="off">
            <button class="btn btn-outline-secondary input-text-reset-button" type="button"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button type="button" class="btn btn-primary">Применить</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Форма выбор колонок -->
  <div class="modal modal-lg dTableSelectColumnsModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Настроить колонки</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="dTableSetsContainer" style="display:none">
            <div class="dTableSetsBlock row align-items-end mb-3">
              <div class="col">
                <label for="" class="form-label">Сохранённые наборы колонок</label>
                <select class="form-select dTableSavedSelect">
                </select>
              </div>
              <div class="col-auto">
                <div class="dTableSetsButtons">
                  <a class="text-decoration-none btn-pull" href="#" title="Загрузить колонки из набора">
                    <i class="align-middle fa fa-arrow-down"></i>
                  </a>
                  <a class="text-decoration-none btn-push" href="#" title="Сохранить колонки в набор">
                    <i class="align-middle fa fa-cloud-arrow-up"></i>
                  </a>
                  <a class="text-decoration-none btn-edit" href="#" title="Изменить наименование набора">
                    <i class="align-middle fa fa-pencil"></i>
                  </a>
                  <a class="text-decoration-none btn-remove" href="#" title="Удалить набор">
                    <i class="align-middle fa fa-trash-can"></i>
                  </a>
                  <a class="text-decoration-none btn-new" href="#" title="Новый набор">
                    <i class="align-middle fa fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          
            <div class="dTableSetsEdit row align-items-end mb-3" style="display:none">
              <div class="col">
                <label for="" class="form-label required">Наименование набора колонок</label>
                <input class="form-control dTableSetsTitle" type="text" required="">
              </div>
              <div class="col-auto">
                <div class="">
                  <a class="btn btn-save">Сохранить</a>
                  <a class="btn btn-cancel">Отмена</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="dTableColumns mb-3 row">
            <div class="col-6 text-muted">Видимые колонки</div>
            <div class="col-6 text-muted">Остальные колонки</div>
            <div class="col-6">
              <div class="input-group input-group-sm my-3">
                <input type="text" class="form-control border-0 border-bottom input-selected" placeholder="Поиск" aria-label="">
                <button class="btn btn-outline-secondary input-text-reset-button border-0 border-bottom" type="button"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="col-6">
              <div class="input-group input-group-sm my-3">
                <input type="text" class="form-control border-0 border-bottom input-other" placeholder="Поиск" aria-label="">
                <button class="btn btn-outline-secondary input-text-reset-button border-0 border-bottom" type="button"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="col-6 list-group connectedSortable columns-selected"></div>
            <div class="col-6 list-group connectedSortable columns-other"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-reset" data-bs-dismiss="modal" title="Сбросить настройки">Сбросить <i class="fa fa-refresh ps-1"></i></button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
          <button type="button" class="btn btn-primary">Применить</button>
        </div>
      </div>
    </div>
  </div>
</div>