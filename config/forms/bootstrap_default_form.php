<?php
    return [
        'inputContainer' => '<div class="form-group {{required}}">{{content}}</div>',
        'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>',
        'select' => '<select name="{{name}}" class="form-control" {{attrs}}>{{content}}</select>',
        'selectMultiple' => '<select class="form-control" name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
        'dateWidget' => '<div class="row"><div class="col-md-2">{{day}}</div> <div class="col-md-3">{{month}}</div> <div class="col-md-3">{{year}}</div></div>'
    ];
?>