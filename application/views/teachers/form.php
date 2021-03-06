<div class="page-content">
                                                <div class="page-header">
                                                        <h1>
                                                                Form Elements
                                                                <small>
                                                                        <i class="icon-double-angle-right"></i>
                                                                        Common form elements and layouts
                                                                </small>
                                                        </h1>
                                                </div><!-- /.page-header -->

                                                <div class="row">
                                                        <div class="col-xs-12">
                                                                <!-- PAGE CONTENT BEGINS -->

                                                                <form class="form-horizontal" role="form">
                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

                                                                                <div class="col-sm-9">
                                                                                        <input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5">
                                                                                </div>
                                                                        </div>

                                                                        <div class="space-4"></div>

                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

                                                                                <div class="col-sm-9">
                                                                                        <input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5">
                                                                                        <span class="help-inline col-xs-12 col-sm-7">
                                                                                                <span class="middle">Inline help text</span>
                                                                                        </span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="space-4"></div>

                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

                                                                                <div class="col-sm-9">
                                                                                        <input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!">
                                                                                        <span class="help-inline col-xs-12 col-sm-7">
                                                                                                <label class="middle">
                                                                                                        <input class="ace" type="checkbox" id="id-disable-check">
                                                                                                        <span class="lbl"> Disable it!</span>
                                                                                                </label>
                                                                                        </span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="space-4"></div>

                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>

                                                                                <div class="col-sm-9">
                                                                                        <input class="input-large" type="text" id="form-field-4" placeholder=".input-sm">
                                                                                        <div class="space-2"></div>

                                                                                        <div class="help-block ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="input-size-slider" aria-disabled="false" style="width: 200px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 71.42857142857143%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 71.42857142857143%;"></a></div>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>

                                                                                <div class="col-sm-9">
                                                                                        <div class="clearfix">
                                                                                                <input class="col-xs-5" type="text" id="form-field-5" placeholder=".col-xs-1">
                                                                                        </div>

                                                                                        <div class="space-2"></div>

                                                                                        <div class="help-block ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="input-span-slider" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 36.36363636363637%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 36.36363636363637%;"></a></div>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

                                                                                <div class="col-sm-9">
                                                                                        <span class="input-icon">
                                                                                                <input type="text" id="form-field-icon-1">
                                                                                                <i class="icon-leaf blue"></i>
                                                                                        </span>

                                                                                        <span class="input-icon input-icon-right">
                                                                                                <input type="text" id="form-field-icon-2">
                                                                                                <i class="icon-leaf green"></i>
                                                                                        </span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="space-4"></div>

                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>

                                                                                <div class="col-sm-9">
                                                                                        <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="" data-placement="bottom" data-original-title="Hello Tooltip!">
                                                                                        <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="" data-original-title="Popover on hover">?</span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="space-4"></div>

                                                                        <div class="form-group">
                                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>

                                                                                <div class="col-sm-9"><div class="tags"><span class="tag">Tag Input Control<button type="button" class="close">×</button></span><input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." style="display: none;"><input type="text" placeholder="Enter tags ..."></div>

                                                                                </div>
                                                                        </div>

                                                                        <div class="clearfix form-actions">
                                                                                <div class="col-md-offset-3 col-md-9">
                                                                                        <button class="btn btn-info" type="button">
                                                                                                <i class="icon-ok bigger-110"></i>
                                                                                                Submit
                                                                                        </button>

                                                                                        &nbsp; &nbsp; &nbsp;
                                                                                        <button class="btn" type="reset">
                                                                                                <i class="icon-undo bigger-110"></i>
                                                                                                Reset
                                                                                        </button>
                                                                                </div>
                                                                        </div>

                                                                        <div class="hr hr-24"></div>

                                                                        <div class="row">
                                                                                <div class="col-xs-12 col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>Text Area</h4>

                                                                                                        <div class="widget-toolbar">
                                                                                                                <a href="#" data-action="collapse">
                                                                                                                        <i class="icon-chevron-up"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="close">
                                                                                                                        <i class="icon-remove"></i>
                                                                                                                </a>
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div>
                                                                                                                        <label for="form-field-8">Default</label>

                                                                                                                        <textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <label for="form-field-9">With Character Limit</label>

                                                                                                                        <textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <label for="form-field-11">Autosize</label>

                                                                                                                        <textarea id="form-field-11" class="autosize-transition form-control" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 52px;"></textarea>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div><!-- /span -->

                                                                                <div class="col-xs-12 col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>Masked Input</h4>

                                                                                                        <span class="widget-toolbar">
                                                                                                                <a href="#" data-action="settings">
                                                                                                                        <i class="icon-cog"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="reload">
                                                                                                                        <i class="icon-refresh"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="collapse">
                                                                                                                        <i class="icon-chevron-up"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="close">
                                                                                                                        <i class="icon-remove"></i>
                                                                                                                </a>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div>
                                                                                                                        <label for="form-field-mask-1">
                                                                                                                                Date
                                                                                                                                <small class="text-success">99/99/9999</small>
                                                                                                                        </label>

                                                                                                                        <div class="input-group">
                                                                                                                                <input class="form-control input-mask-date" type="text" id="form-field-mask-1">
                                                                                                                                <span class="input-group-btn">
                                                                                                                                        <button class="btn btn-sm btn-default" type="button">
                                                                                                                                                <i class="icon-calendar bigger-110"></i>
                                                                                                                                                Go!
                                                                                                                                        </button>
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <label for="form-field-mask-2">
                                                                                                                                Phone
                                                                                                                                <small class="text-warning">(999) 999-9999</small>
                                                                                                                        </label>

                                                                                                                        <div class="input-group">
                                                                                                                                <span class="input-group-addon">
                                                                                                                                        <i class="icon-phone"></i>
                                                                                                                                </span>

                                                                                                                                <input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <label for="form-field-mask-3">
                                                                                                                                Product Key
                                                                                                                                <small class="text-error">a*-999-a999</small>
                                                                                                                        </label>

                                                                                                                        <div class="input-group">
                                                                                                                                <input class="form-control input-mask-product" type="text" id="form-field-mask-3">
                                                                                                                                <span class="input-group-addon">
                                                                                                                                        <i class="icon-key"></i>
                                                                                                                                </span>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <label for="form-field-mask-4">
                                                                                                                                Eye Script
                                                                                                                                <small class="text-info">~9.99 ~9.99 999</small>
                                                                                                                        </label>

                                                                                                                        <div>
                                                                                                                                <input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4">
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div><!-- /span -->

                                                                                <div class="col-xs-12 col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>Select Box</h4>

                                                                                                        <span class="widget-toolbar">
                                                                                                                <a href="#" data-action="settings">
                                                                                                                        <i class="icon-cog"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="reload">
                                                                                                                        <i class="icon-refresh"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="collapse">
                                                                                                                        <i class="icon-chevron-up"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="close">
                                                                                                                        <i class="icon-remove"></i>
                                                                                                                </a>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div>
                                                                                                                        <label for="form-field-select-1">Default</label>

                                                                                                                        <select class="form-control" id="form-field-select-1">
                                                                                                                                <option value="">&nbsp;</option>
                                                                                                                                <option value="AL">Alabama</option>
                                                                                                                                <option value="AK">Alaska</option>
                                                                                                                                <option value="AZ">Arizona</option>
                                                                                                                                <option value="AR">Arkansas</option>
                                                                                                                                <option value="CA">California</option>
                                                                                                                                <option value="CO">Colorado</option>
                                                                                                                                <option value="CT">Connecticut</option>
                                                                                                                                <option value="DE">Delaware</option>
                                                                                                                                <option value="FL">Florida</option>
                                                                                                                                <option value="GA">Georgia</option>
                                                                                                                                <option value="HI">Hawaii</option>
                                                                                                                                <option value="ID">Idaho</option>
                                                                                                                                <option value="IL">Illinois</option>
                                                                                                                                <option value="IN">Indiana</option>
                                                                                                                                <option value="IA">Iowa</option>
                                                                                                                                <option value="KS">Kansas</option>
                                                                                                                                <option value="KY">Kentucky</option>
                                                                                                                                <option value="LA">Louisiana</option>
                                                                                                                                <option value="ME">Maine</option>
                                                                                                                                <option value="MD">Maryland</option>
                                                                                                                                <option value="MA">Massachusetts</option>
                                                                                                                                <option value="MI">Michigan</option>
                                                                                                                                <option value="MN">Minnesota</option>
                                                                                                                                <option value="MS">Mississippi</option>
                                                                                                                                <option value="MO">Missouri</option>
                                                                                                                                <option value="MT">Montana</option>
                                                                                                                                <option value="NE">Nebraska</option>
                                                                                                                                <option value="NV">Nevada</option>
                                                                                                                                <option value="NH">New Hampshire</option>
                                                                                                                                <option value="NJ">New Jersey</option>
                                                                                                                                <option value="NM">New Mexico</option>
                                                                                                                                <option value="NY">New York</option>
                                                                                                                                <option value="NC">North Carolina</option>
                                                                                                                                <option value="ND">North Dakota</option>
                                                                                                                                <option value="OH">Ohio</option>
                                                                                                                                <option value="OK">Oklahoma</option>
                                                                                                                                <option value="OR">Oregon</option>
                                                                                                                                <option value="PA">Pennsylvania</option>
                                                                                                                                <option value="RI">Rhode Island</option>
                                                                                                                                <option value="SC">South Carolina</option>
                                                                                                                                <option value="SD">South Dakota</option>
                                                                                                                                <option value="TN">Tennessee</option>
                                                                                                                                <option value="TX">Texas</option>
                                                                                                                                <option value="UT">Utah</option>
                                                                                                                                <option value="VT">Vermont</option>
                                                                                                                                <option value="VA">Virginia</option>
                                                                                                                                <option value="WA">Washington</option>
                                                                                                                                <option value="WV">West Virginia</option>
                                                                                                                                <option value="WI">Wisconsin</option>
                                                                                                                                <option value="WY">Wyoming</option>
                                                                                                                        </select>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <label for="form-field-select-2">Multiple</label>

                                                                                                                        <select class="form-control" id="form-field-select-2" multiple="multiple">
                                                                                                                                <option value="AL">Alabama</option>
                                                                                                                                <option value="AK">Alaska</option>
                                                                                                                                <option value="AZ">Arizona</option>
                                                                                                                                <option value="AR">Arkansas</option>
                                                                                                                                <option value="CA">California</option>
                                                                                                                                <option value="CO">Colorado</option>
                                                                                                                                <option value="CT">Connecticut</option>
                                                                                                                                <option value="DE">Delaware</option>
                                                                                                                                <option value="FL">Florida</option>
                                                                                                                                <option value="GA">Georgia</option>
                                                                                                                                <option value="HI">Hawaii</option>
                                                                                                                                <option value="ID">Idaho</option>
                                                                                                                                <option value="IL">Illinois</option>
                                                                                                                                <option value="IN">Indiana</option>
                                                                                                                                <option value="IA">Iowa</option>
                                                                                                                                <option value="KS">Kansas</option>
                                                                                                                                <option value="KY">Kentucky</option>
                                                                                                                                <option value="LA">Louisiana</option>
                                                                                                                                <option value="ME">Maine</option>
                                                                                                                                <option value="MD">Maryland</option>
                                                                                                                                <option value="MA">Massachusetts</option>
                                                                                                                                <option value="MI">Michigan</option>
                                                                                                                                <option value="MN">Minnesota</option>
                                                                                                                                <option value="MS">Mississippi</option>
                                                                                                                                <option value="MO">Missouri</option>
                                                                                                                                <option value="MT">Montana</option>
                                                                                                                                <option value="NE">Nebraska</option>
                                                                                                                                <option value="NV">Nevada</option>
                                                                                                                                <option value="NH">New Hampshire</option>
                                                                                                                                <option value="NJ">New Jersey</option>
                                                                                                                                <option value="NM">New Mexico</option>
                                                                                                                                <option value="NY">New York</option>
                                                                                                                                <option value="NC">North Carolina</option>
                                                                                                                                <option value="ND">North Dakota</option>
                                                                                                                                <option value="OH">Ohio</option>
                                                                                                                                <option value="OK">Oklahoma</option>
                                                                                                                                <option value="OR">Oregon</option>
                                                                                                                                <option value="PA">Pennsylvania</option>
                                                                                                                                <option value="RI">Rhode Island</option>
                                                                                                                                <option value="SC">South Carolina</option>
                                                                                                                                <option value="SD">South Dakota</option>
                                                                                                                                <option value="TN">Tennessee</option>
                                                                                                                                <option value="TX">Texas</option>
                                                                                                                                <option value="UT">Utah</option>
                                                                                                                                <option value="VT">Vermont</option>
                                                                                                                                <option value="VA">Virginia</option>
                                                                                                                                <option value="WA">Washington</option>
                                                                                                                                <option value="WV">West Virginia</option>
                                                                                                                                <option value="WI">Wisconsin</option>
                                                                                                                                <option value="WY">Wyoming</option>
                                                                                                                        </select>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <label for="form-field-select-3">Chosen</label>

                                                                                                                        <br>
                                                                                                                        <select class="width-80 chosen-select" id="form-field-select-3" data-placeholder="Choose a Country..." style="display: none;">
                                                                                                                                <option value="">&nbsp;</option>
                                                                                                                                <option value="AL">Alabama</option>
                                                                                                                                <option value="AK">Alaska</option>
                                                                                                                                <option value="AZ">Arizona</option>
                                                                                                                                <option value="AR">Arkansas</option>
                                                                                                                                <option value="CA">California</option>
                                                                                                                                <option value="CO">Colorado</option>
                                                                                                                                <option value="CT">Connecticut</option>
                                                                                                                                <option value="DE">Delaware</option>
                                                                                                                                <option value="FL">Florida</option>
                                                                                                                                <option value="GA">Georgia</option>
                                                                                                                                <option value="HI">Hawaii</option>
                                                                                                                                <option value="ID">Idaho</option>
                                                                                                                                <option value="IL">Illinois</option>
                                                                                                                                <option value="IN">Indiana</option>
                                                                                                                                <option value="IA">Iowa</option>
                                                                                                                                <option value="KS">Kansas</option>
                                                                                                                                <option value="KY">Kentucky</option>
                                                                                                                                <option value="LA">Louisiana</option>
                                                                                                                                <option value="ME">Maine</option>
                                                                                                                                <option value="MD">Maryland</option>
                                                                                                                                <option value="MA">Massachusetts</option>
                                                                                                                                <option value="MI">Michigan</option>
                                                                                                                                <option value="MN">Minnesota</option>
                                                                                                                                <option value="MS">Mississippi</option>
                                                                                                                                <option value="MO">Missouri</option>
                                                                                                                                <option value="MT">Montana</option>
                                                                                                                                <option value="NE">Nebraska</option>
                                                                                                                                <option value="NV">Nevada</option>
                                                                                                                                <option value="NH">New Hampshire</option>
                                                                                                                                <option value="NJ">New Jersey</option>
                                                                                                                                <option value="NM">New Mexico</option>
                                                                                                                                <option value="NY">New York</option>
                                                                                                                                <option value="NC">North Carolina</option>
                                                                                                                                <option value="ND">North Dakota</option>
                                                                                                                                <option value="OH">Ohio</option>
                                                                                                                                <option value="OK">Oklahoma</option>
                                                                                                                                <option value="OR">Oregon</option>
                                                                                                                                <option value="PA">Pennsylvania</option>
                                                                                                                                <option value="RI">Rhode Island</option>
                                                                                                                                <option value="SC">South Carolina</option>
                                                                                                                                <option value="SD">South Dakota</option>
                                                                                                                                <option value="TN">Tennessee</option>
                                                                                                                                <option value="TX">Texas</option>
                                                                                                                                <option value="UT">Utah</option>
                                                                                                                                <option value="VT">Vermont</option>
                                                                                                                                <option value="VA">Virginia</option>
                                                                                                                                <option value="WA">Washington</option>
                                                                                                                                <option value="WV">West Virginia</option>
                                                                                                                                <option value="WI">Wisconsin</option>
                                                                                                                                <option value="WY">Wyoming</option>
                                                                                                                        </select><div class="chosen-container chosen-container-single" style="width: 302px;" title="" id="form_field_select_3_chosen"><a class="chosen-single" tabindex="-1"><span>Arkansas</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"><li class="active-result" style="" data-option-array-index="3"><em>Ar</em>izona</li><li class="active-result result-selected" style="" data-option-array-index="4"><em>Ar</em>kansas</li></ul></div></div>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <div>
                                                                                                                        <div class="row">
                                                                                                                                <div class="col-sm-6">
                                                                                                                                        <span class="bigger-110">Multiple</span>
                                                                                                                                </div><!-- /span -->

                                                                                                                                <div class="col-sm-6">
                                                                                                                                        <span class="pull-right inline">
                                                                                                                                                <span class="grey">style:</span>

                                                                                                                                                <span class="btn-toolbar inline middle no-margin">
                                                                                                                                                        <span id="chosen-multiple-style" data-toggle="buttons" class="btn-group no-margin">
                                                                                                                                                                <label class="btn btn-xs btn-yellow">
                                                                                                                                                                        1
                                                                                                                                                                        <input type="radio" value="1">
                                                                                                                                                                </label>

                                                                                                                                                                <label class="btn btn-xs btn-yellow active">
                                                                                                                                                                        2
                                                                                                                                                                        <input type="radio" value="2">
                                                                                                                                                                </label>
                                                                                                                                                        </span>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </div><!-- /span -->
                                                                                                                        </div>

                                                                                                                        <div class="space-2"></div>

                                                                                                                        <select multiple="" class="width-80 chosen-select tag-input-style" id="form-field-select-4" data-placeholder="Choose a Country..." style="display: none;">
                                                                                                                                <option value="">&nbsp;</option>
                                                                                                                                <option value="AL">Alabama</option>
                                                                                                                                <option value="AK">Alaska</option>
                                                                                                                                <option value="AZ">Arizona</option>
                                                                                                                                <option value="AR">Arkansas</option>
                                                                                                                                <option value="CA">California</option>
                                                                                                                                <option value="CO">Colorado</option>
                                                                                                                                <option value="CT">Connecticut</option>
                                                                                                                                <option value="DE">Delaware</option>
                                                                                                                                <option value="FL">Florida</option>
                                                                                                                                <option value="GA">Georgia</option>
                                                                                                                                <option value="HI">Hawaii</option>
                                                                                                                                <option value="ID">Idaho</option>
                                                                                                                                <option value="IL">Illinois</option>
                                                                                                                                <option value="IN">Indiana</option>
                                                                                                                                <option value="IA">Iowa</option>
                                                                                                                                <option value="KS">Kansas</option>
                                                                                                                                <option value="KY">Kentucky</option>
                                                                                                                                <option value="LA">Louisiana</option>
                                                                                                                                <option value="ME">Maine</option>
                                                                                                                                <option value="MD">Maryland</option>
                                                                                                                                <option value="MA">Massachusetts</option>
                                                                                                                                <option value="MI">Michigan</option>
                                                                                                                                <option value="MN">Minnesota</option>
                                                                                                                                <option value="MS">Mississippi</option>
                                                                                                                                <option value="MO">Missouri</option>
                                                                                                                                <option value="MT">Montana</option>
                                                                                                                                <option value="NE">Nebraska</option>
                                                                                                                                <option value="NV">Nevada</option>
                                                                                                                                <option value="NH">New Hampshire</option>
                                                                                                                                <option value="NJ">New Jersey</option>
                                                                                                                                <option value="NM">New Mexico</option>
                                                                                                                                <option value="NY">New York</option>
                                                                                                                                <option value="NC">North Carolina</option>
                                                                                                                                <option value="ND">North Dakota</option>
                                                                                                                                <option value="OH">Ohio</option>
                                                                                                                                <option value="OK">Oklahoma</option>
                                                                                                                                <option value="OR">Oregon</option>
                                                                                                                                <option value="PA">Pennsylvania</option>
                                                                                                                                <option value="RI">Rhode Island</option>
                                                                                                                                <option value="SC">South Carolina</option>
                                                                                                                                <option value="SD">South Dakota</option>
                                                                                                                                <option value="TN">Tennessee</option>
                                                                                                                                <option value="TX">Texas</option>
                                                                                                                                <option value="UT">Utah</option>
                                                                                                                                <option value="VT">Vermont</option>
                                                                                                                                <option value="VA">Virginia</option>
                                                                                                                                <option value="WA">Washington</option>
                                                                                                                                <option value="WV">West Virginia</option>
                                                                                                                                <option value="WI">Wisconsin</option>
                                                                                                                                <option value="WY">Wyoming</option>
                                                                                                                        </select><div class="chosen-container chosen-container-multi" style="width: 302px;" title="" id="form_field_select_4_chosen"><ul class="chosen-choices"><li class="search-choice"><span>Alabama</span><a class="search-choice-close" data-option-array-index="1"></a></li><li class="search-choice"><span>Louisiana</span><a class="search-choice-close" data-option-array-index="18"></a></li><li class="search-field"><input type="text" value="Choose a Country..." class="" autocomplete="off" style="width: 25px;"></li></ul><div class="chosen-drop"><ul class="chosen-results"><li class="result-selected" style="" data-option-array-index="18"><em>Lo</em>uisiana</li></ul></div></div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div><!-- /span -->
                                                                        </div><!-- /row -->

                                                                        <div class="space-24"></div>

                                                                        <h3 class="header smaller lighter blue">
                                                                                Checkboxes &amp; Radio
                                                                                <small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small>
                                                                        </h3>

                                                                        <div class="row">
                                                                                <div class="col-xs-12 col-sm-5">
                                                                                        <div class="control-group">
                                                                                                <label class="control-label bolder blue">Checkbox</label>

                                                                                                <div class="checkbox">
                                                                                                        <label>
                                                                                                                <input name="form-field-checkbox" type="checkbox" class="ace">
                                                                                                                <span class="lbl"> choice 1</span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="checkbox">
                                                                                                        <label>
                                                                                                                <input name="form-field-checkbox" type="checkbox" class="ace">
                                                                                                                <span class="lbl"> choice 2</span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="checkbox">
                                                                                                        <label>
                                                                                                                <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                                                                                                                <span class="lbl"> choice 3</span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="checkbox">
                                                                                                        <label class="block">
                                                                                                                <input name="form-field-checkbox" disabled="" type="checkbox" class="ace">
                                                                                                                <span class="lbl"> disabled</span>
                                                                                                        </label>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="col-xs-12 col-sm-6">
                                                                                        <div class="control-group">
                                                                                                <label class="control-label bolder blue">Radio</label>

                                                                                                <div class="radio">
                                                                                                        <label>
                                                                                                                <input name="form-field-radio" type="radio" class="ace">
                                                                                                                <span class="lbl"> radio option 1</span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="radio">
                                                                                                        <label>
                                                                                                                <input name="form-field-radio" type="radio" class="ace">
                                                                                                                <span class="lbl"> radio option 2</span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="radio">
                                                                                                        <label>
                                                                                                                <input name="form-field-radio" type="radio" class="ace">
                                                                                                                <span class="lbl"> radio option 3</span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="radio">
                                                                                                        <label>
                                                                                                                <input disabled="" name="form-field-radio" type="radio" class="ace">
                                                                                                                <span class="lbl"> disabled</span>
                                                                                                        </label>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div><!-- /row -->

                                                                        <hr>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>

                                                                                <div class="controls col-xs-12 col-sm-9">
                                                                                        <div class="row">
                                                                                                <div class="col-xs-3">
                                                                                                        <label>
                                                                                                                <input name="switch-field-1" class="ace ace-switch" type="checkbox">
                                                                                                                <span class="lbl"></span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="col-xs-3">
                                                                                                        <label>
                                                                                                                <input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox">
                                                                                                                <span class="lbl"></span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="col-xs-3">
                                                                                                        <label>
                                                                                                                <input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
                                                                                                                <span class="lbl"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                                <div class="col-xs-3">
                                                                                                        <label>
                                                                                                                <input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox">
                                                                                                                <span class="lbl"></span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="col-xs-3">
                                                                                                        <label>
                                                                                                                <input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox">
                                                                                                                <span class="lbl"></span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="col-xs-3">
                                                                                                        <label>
                                                                                                                <input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox">
                                                                                                                <span class="lbl"></span>
                                                                                                        </label>
                                                                                                </div>

                                                                                                <div class="col-xs-3">
                                                                                                        <label>
                                                                                                                <input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox">
                                                                                                                <span class="lbl"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <hr>
                                                                        <div class="row">
                                                                                <div class="col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>Custom File Input</h4>

                                                                                                        <span class="widget-toolbar">
                                                                                                                <a href="#" data-action="collapse">
                                                                                                                        <i class="icon-chevron-up"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="close">
                                                                                                                        <i class="icon-remove"></i>
                                                                                                                </a>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div class="ace-file-input"><input type="file" id="id-input-file-2"><label class="file-label" data-title="Choose"><span class="file-name" data-title="No File ..."><i class="icon-upload-alt"></i></span></label><a class="remove" href="#"><i class="icon-remove"></i></a></div>
                                                                                                                <div class="ace-file-input ace-file-multiple"><input multiple="" type="file" id="id-input-file-3"><label class="file-label" data-title="Drop files here or click to choose"><span class="file-name" data-title="No File ..."><i class="icon-cloud-upload"></i></span></label><a class="remove" href="#"><i class="icon-remove"></i></a></div>
                                                                                                                <label>
                                                                                                                        <input type="checkbox" name="file-format" id="id-file-format" class="ace">
                                                                                                                        <span class="lbl"> Allow only images</span>
                                                                                                                </label>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>jQuery UI Sliders</h4>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div class="row">
                                                                                                                        <div class="col-xs-3 col-md-2">
                                                                                                                                <div id="slider-range" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="height: 200px;"><div class="ui-slider-range ui-widget-header ui-corner-all" style="bottom: 17%; height: 50%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="bottom: 17%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="bottom: 67%;"></a></div>
                                                                                                                        </div>

                                                                                                                        <div class="col-xs-9 col-md-10">
                                                                                                                                <div id="eq">
                                                                                                                                        <span class="ui-slider-green ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 77%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 77%;"></a></span>
                                                                                                                                        <span class="ui-slider-red ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 55.00000000000001%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 55.00000000000001%;"></a></span>
                                                                                                                                        <span class="ui-slider-purple ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 33%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 33%;"></a></span>
                                                                                                                                        <span class="ui-slider-orange ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 40%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 40%;"></a></span>
                                                                                                                                        <span class="ui-slider-dark ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 88%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 88%;"></a></span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>Spinners</h4>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div class="ace-spinner" style="width: 70px;"><div class="input-group"><input type="text" class="input-mini spinner-input form-control" id="spinner1" maxlength="3"><div class="spinner-buttons input-group-btn btn-group-vertical">							<button type="button" class="btn spinner-up btn-xs btn-info">								<i class="icon-chevron-up"></i>							</button>							<button type="button" class="btn spinner-down btn-xs btn-info">								<i class="icon-chevron-down"></i>							</button>						</div></div></div>
                                                                                                                <div class="space-6"></div>

                                                                                                                <div class="ace-spinner touch-spinner" style="width: 140px;"><div class="input-group"><input type="text" class="input-mini spinner-input form-control" id="spinner2" maxlength="5"><div class="spinner-buttons input-group-btn">							<button type="button" class="btn spinner-up btn-xs ">								<i class="icon-caret-up"></i>							</button>							<button type="button" class="btn spinner-down btn-xs ">								<i class="icon-caret-down"></i>							</button>						</div></div></div>
                                                                                                                <div class="space-6"></div>

                                                                                                                <div class="ace-spinner touch-spinner" style="width: 100px;"><div class="input-group"><div class="spinner-buttons input-group-btn">							<button type="button" class="btn spinner-down btn-xs btn-danger">								<i class="icon-minus smaller-75"></i>							</button>						</div><input type="text" class="input-mini spinner-input form-control" id="spinner3" maxlength="3"><div class="spinner-buttons input-group-btn">							<button type="button" class="btn spinner-up btn-xs btn-success">								<i class="icon-plus smaller-75"></i>							</button>						</div></div></div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <hr>
                                                                        <div class="row">
                                                                                <div class="col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>Date Picker</h4>

                                                                                                        <span class="widget-toolbar">
                                                                                                                <a href="#" data-action="settings">
                                                                                                                        <i class="icon-cog"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="reload">
                                                                                                                        <i class="icon-refresh"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="collapse">
                                                                                                                        <i class="icon-chevron-up"></i>
                                                                                                                </a>

                                                                                                                <a href="#" data-action="close">
                                                                                                                        <i class="icon-remove"></i>
                                                                                                                </a>
                                                                                                        </span>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <label for="id-date-picker-1">Date Picker</label>

                                                                                                                <div class="row">
                                                                                                                        <div class="col-xs-8 col-sm-11">
                                                                                                                                <div class="input-group">
                                                                                                                                        <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
                                                                                                                                        <span class="input-group-addon">
                                                                                                                                                <i class="icon-calendar bigger-110"></i>
                                                                                                                                        </span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <label for="id-date-range-picker-1">Date Range Picker</label>

                                                                                                                <div class="row">
                                                                                                                        <div class="col-xs-8 col-sm-11">
                                                                                                                                <div class="input-group">
                                                                                                                                        <span class="input-group-addon">
                                                                                                                                                <i class="icon-calendar bigger-110"></i>
                                                                                                                                        </span>

                                                                                                                                        <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1">
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <label for="timepicker1">Time Picker</label>

                                                                                                                <div class="input-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="icon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="icon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementSecond"><i class="icon-chevron-up"></i></a></td></tr><tr><td><input type="text" name="hour" class="bootstrap-timepicker-hour" maxlength="2"></td> <td class="separator">:</td><td><input type="text" name="minute" class="bootstrap-timepicker-minute" maxlength="2"></td> <td class="separator">:</td><td><input type="text" name="second" class="bootstrap-timepicker-second" maxlength="2"></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="icon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="icon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="decrementSecond"><i class="icon-chevron-down"></i></a></td></tr></tbody></table></div>
                                                                                                                        <input id="timepicker1" type="text" class="form-control">
                                                                                                                        <span class="input-group-addon">
                                                                                                                                <i class="icon-time bigger-110"></i>
                                                                                                                        </span>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>
                                                                                                                <i class="icon-tint"></i>
                                                                                                                Color Picker
                                                                                                        </h4>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div class="row-fluid">
                                                                                                                        <label for="colorpicker1">Color Picker</label>
                                                                                                                </div>

                                                                                                                <div class="control-group">
                                                                                                                        <div class="bootstrap-colorpicker">
                                                                                                                                <input id="colorpicker1" type="text" class="input-small">
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <hr>
                                                                                                                <label for="simple-colorpicker-1">Custom Color Picker</label>

                                                                                                                <select id="simple-colorpicker-1" class="hide" style="display: none;">
                                                                                                                        <option value="#ac725e">#ac725e</option>
                                                                                                                        <option value="#d06b64">#d06b64</option>
                                                                                                                        <option value="#f83a22">#f83a22</option>
                                                                                                                        <option value="#fa573c">#fa573c</option>
                                                                                                                        <option value="#ff7537">#ff7537</option>
                                                                                                                        <option value="#ffad46" selected="">#ffad46</option>
                                                                                                                        <option value="#42d692">#42d692</option>
                                                                                                                        <option value="#16a765">#16a765</option>
                                                                                                                        <option value="#7bd148">#7bd148</option>
                                                                                                                        <option value="#b3dc6c">#b3dc6c</option>
                                                                                                                        <option value="#fbe983">#fbe983</option>
                                                                                                                        <option value="#fad165">#fad165</option>
                                                                                                                        <option value="#92e1c0">#92e1c0</option>
                                                                                                                        <option value="#9fe1e7">#9fe1e7</option>
                                                                                                                        <option value="#9fc6e7">#9fc6e7</option>
                                                                                                                        <option value="#4986e7">#4986e7</option>
                                                                                                                        <option value="#9a9cff">#9a9cff</option>
                                                                                                                        <option value="#b99aff">#b99aff</option>
                                                                                                                        <option value="#c2c2c2">#c2c2c2</option>
                                                                                                                        <option value="#cabdbf">#cabdbf</option>
                                                                                                                        <option value="#cca6ac">#cca6ac</option>
                                                                                                                        <option value="#f691b2">#f691b2</option>
                                                                                                                        <option value="#cd74e6">#cd74e6</option>
                                                                                                                        <option value="#a47ae2">#a47ae2</option>
                                                                                                                        <option value="#555">#555</option>
                                                                                                                </select><div class="dropdown dropdown-colorpicker"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorpicker" style="background-color:#ffad46"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn" href="#" style="background-color:#ac725e;" data-color="#ac725e"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#d06b64;" data-color="#d06b64"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#f83a22;" data-color="#f83a22"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fa573c;" data-color="#fa573c"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#ff7537;" data-color="#ff7537"></a></li><li><a class="colorpick-btn selected" href="#" style="background-color:#ffad46;" data-color="#ffad46"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#42d692;" data-color="#42d692"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#16a765;" data-color="#16a765"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#7bd148;" data-color="#7bd148"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#b3dc6c;" data-color="#b3dc6c"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fbe983;" data-color="#fbe983"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fad165;" data-color="#fad165"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#92e1c0;" data-color="#92e1c0"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9fe1e7;" data-color="#9fe1e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9fc6e7;" data-color="#9fc6e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#4986e7;" data-color="#4986e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9a9cff;" data-color="#9a9cff"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#b99aff;" data-color="#b99aff"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#c2c2c2;" data-color="#c2c2c2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cabdbf;" data-color="#cabdbf"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cca6ac;" data-color="#cca6ac"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#f691b2;" data-color="#f691b2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cd74e6;" data-color="#cd74e6"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#a47ae2;" data-color="#a47ae2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#555;" data-color="#555"></a></li></ul></div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="col-sm-4">
                                                                                        <div class="widget-box">
                                                                                                <div class="widget-header">
                                                                                                        <h4>
                                                                                                                <i class="icon-dashboard"></i>
                                                                                                                Knob Input
                                                                                                        </h4>
                                                                                                </div>

                                                                                                <div class="widget-body">
                                                                                                        <div class="widget-main">
                                                                                                                <div class="control-group">
                                                                                                                        <div class="row">
                                                                                                                                <div class="col-xs-6 center">
                                                                                                                                        <div class="knob-container inline">
                                                                                                                                                <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 16px; line-height: normal; font-family: Arial; text-align: center; color: rgb(135, 206, 235); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                                                                                                                                        </div>
                                                                                                                                </div>

                                                                                                                                <div class="col-xs-6  center">
                                                                                                                                        <div class="knob-container inline">
                                                                                                                                                <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="#87B87F" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 16px; line-height: normal; font-family: Arial; text-align: center; color: rgb(135, 184, 127); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                        </div>

                                                                                                                        <div class="row">
                                                                                                                                <div class="col-xs-12 center">
                                                                                                                                        <div class="knob-container inline">
                                                                                                                                                <div style="display:inline;width:150px;height:150px;"><canvas width="150" height="150"></canvas><input type="text" class="input-small knob" data-min="0" data-max="10" data-width="150" data-height="150" data-thickness=".2" data-fgcolor="#B8877F" data-angleoffset="90" data-cursor="true" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; margin-top: 50px; margin-left: -114px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 37px; line-height: normal; font-family: Arial; text-align: center; color: rgb(184, 135, 127); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;"></div>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </form>

                                                                <div class="hr hr-18 dotted hr-double"></div>

                                                                <h4 class="pink">
                                                                        <i class="icon-hand-right green"></i>
                                                                        <a href="#modal-form" role="button" class="blue" data-toggle="modal"> Form Inside a Modal Box </a>
                                                                </h4>

                                                                <div class="hr hr-18 dotted hr-double"></div>
                                                                <h4 class="header green">Form Layouts</h4>

                                                                <div class="row">
                                                                        <div class="col-sm-5">
                                                                                <div class="widget-box">
                                                                                        <div class="widget-header">
                                                                                                <h4>Default</h4>
                                                                                        </div>

                                                                                        <div class="widget-body">
                                                                                                <div class="widget-main no-padding">
                                                                                                        <form>
                                                                                                                <!-- <legend>Form</legend> -->

                                                                                                                <fieldset>
                                                                                                                        <label>Label name</label>

                                                                                                                        <input type="text" placeholder="Type something…">
                                                                                                                        <span class="help-block">Example block-level help text here.</span>

                                                                                                                        <label class="pull-right">
                                                                                                                                <input type="checkbox" class="ace">
                                                                                                                                <span class="lbl"> check me out</span>
                                                                                                                        </label>
                                                                                                                </fieldset>

                                                                                                                <div class="form-actions center">
                                                                                                                        <button type="button" class="btn btn-sm btn-success">
                                                                                                                                Submit
                                                                                                                                <i class="icon-arrow-right icon-on-right bigger-110"></i>
                                                                                                                        </button>
                                                                                                                </div>
                                                                                                        </form>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <div class="col-sm-7">
                                                                                <div class="widget-box">
                                                                                        <div class="widget-header">
                                                                                                <h4>Inline Forms</h4>
                                                                                        </div>

                                                                                        <div class="widget-body">
                                                                                                <div class="widget-main">
                                                                                                        <form class="form-inline">
                                                                                                                <input type="text" class="input-small" placeholder="Username">
                                                                                                                <input type="password" class="input-small" placeholder="Password">
                                                                                                                <label class="inline">
                                                                                                                        <input type="checkbox" class="ace">
                                                                                                                        <span class="lbl"> remember me</span>
                                                                                                                </label>

                                                                                                                <button type="button" class="btn btn-info btn-sm">
                                                                                                                        <i class="icon-key bigger-110"></i>
                                                                                                                        Login
                                                                                                                </button>
                                                                                                        </form>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="space-6"></div>

                                                                                <div class="widget-box">
                                                                                        <div class="widget-header widget-header-small">
                                                                                                <h5 class="lighter">Search Form</h5>
                                                                                        </div>

                                                                                        <div class="widget-body">
                                                                                                <div class="widget-main">
                                                                                                        <form class="form-search">
                                                                                                                <div class="row">
                                                                                                                        <div class="col-xs-12 col-sm-8">
                                                                                                                                <div class="input-group">
                                                                                                                                        <input type="text" class="form-control search-query" placeholder="Type your query">
                                                                                                                                        <span class="input-group-btn">
                                                                                                                                                <button type="button" class="btn btn-purple btn-sm">
                                                                                                                                                        Search
                                                                                                                                                        <i class="icon-search icon-on-right bigger-110"></i>
                                                                                                                                                </button>
                                                                                                                                        </span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </form>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                <div id="modal-form" class="modal" tabindex="-1">
                                                                        <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                                                                <h4 class="blue bigger">Please fill the following form fields</h4>
                                                                                        </div>

                                                                                        <div class="modal-body overflow-visible">
                                                                                                <div class="row">
                                                                                                        <div class="col-xs-12 col-sm-5">
                                                                                                                <div class="space"></div>

                                                                                                                <div class="ace-file-input ace-file-multiple"><input type="file"><label class="file-label" data-title="Drop files here or click to choose"><span class="file-name" data-title="No File ..."><i class="icon-cloud-upload"></i></span></label><a class="remove" href="#"><i class="icon-remove"></i></a></div>
                                                                                                        </div>

                                                                                                        <div class="col-xs-12 col-sm-7">
                                                                                                                <div class="form-group">
                                                                                                                        <label for="form-field-select-3">Location</label>

                                                                                                                        <div>
                                                                                                                                <select class="chosen-select" data-placeholder="Choose a Country..." style="display: none;">
                                                                                                                                        <option value="">&nbsp;</option>
                                                                                                                                        <option value="AL">Alabama</option>
                                                                                                                                        <option value="AK">Alaska</option>
                                                                                                                                        <option value="AZ">Arizona</option>
                                                                                                                                        <option value="AR">Arkansas</option>
                                                                                                                                        <option value="CA">California</option>
                                                                                                                                        <option value="CO">Colorado</option>
                                                                                                                                        <option value="CT">Connecticut</option>
                                                                                                                                        <option value="DE">Delaware</option>
                                                                                                                                        <option value="FL">Florida</option>
                                                                                                                                        <option value="GA">Georgia</option>
                                                                                                                                        <option value="HI">Hawaii</option>
                                                                                                                                        <option value="ID">Idaho</option>
                                                                                                                                        <option value="IL">Illinois</option>
                                                                                                                                        <option value="IN">Indiana</option>
                                                                                                                                        <option value="IA">Iowa</option>
                                                                                                                                        <option value="KS">Kansas</option>
                                                                                                                                        <option value="KY">Kentucky</option>
                                                                                                                                        <option value="LA">Louisiana</option>
                                                                                                                                        <option value="ME">Maine</option>
                                                                                                                                        <option value="MD">Maryland</option>
                                                                                                                                        <option value="MA">Massachusetts</option>
                                                                                                                                        <option value="MI">Michigan</option>
                                                                                                                                        <option value="MN">Minnesota</option>
                                                                                                                                        <option value="MS">Mississippi</option>
                                                                                                                                        <option value="MO">Missouri</option>
                                                                                                                                        <option value="MT">Montana</option>
                                                                                                                                        <option value="NE">Nebraska</option>
                                                                                                                                        <option value="NV">Nevada</option>
                                                                                                                                        <option value="NH">New Hampshire</option>
                                                                                                                                        <option value="NJ">New Jersey</option>
                                                                                                                                        <option value="NM">New Mexico</option>
                                                                                                                                        <option value="NY">New York</option>
                                                                                                                                        <option value="NC">North Carolina</option>
                                                                                                                                        <option value="ND">North Dakota</option>
                                                                                                                                        <option value="OH">Ohio</option>
                                                                                                                                        <option value="OK">Oklahoma</option>
                                                                                                                                        <option value="OR">Oregon</option>
                                                                                                                                        <option value="PA">Pennsylvania</option>
                                                                                                                                        <option value="RI">Rhode Island</option>
                                                                                                                                        <option value="SC">South Carolina</option>
                                                                                                                                        <option value="SD">South Dakota</option>
                                                                                                                                        <option value="TN">Tennessee</option>
                                                                                                                                        <option value="TX">Texas</option>
                                                                                                                                        <option value="UT">Utah</option>
                                                                                                                                        <option value="VT">Vermont</option>
                                                                                                                                        <option value="VA">Virginia</option>
                                                                                                                                        <option value="WA">Washington</option>
                                                                                                                                        <option value="WV">West Virginia</option>
                                                                                                                                        <option value="WI">Wisconsin</option>
                                                                                                                                        <option value="WY">Wyoming</option>
                                                                                                                                </select><div class="chosen-container chosen-container-single" style="width: 0px;" title=""><a class="chosen-single" tabindex="-1"><span>&nbsp;</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="space-4"></div>

                                                                                                                <div class="form-group">
                                                                                                                        <label for="form-field-username">Username</label>

                                                                                                                        <div>
                                                                                                                                <input class="input-large" type="text" id="form-field-username" placeholder="Username" value="alexdoe">
                                                                                                                        </div>
                                                                                                                </div>

                                                                                                                <div class="space-4"></div>

                                                                                                                <div class="form-group">
                                                                                                                        <label for="form-field-first">Name</label>

                                                                                                                        <div>
                                                                                                                                <input class="input-medium" type="text" id="form-field-first" placeholder="First Name" value="Alex">
                                                                                                                                <input class="input-medium" type="text" id="form-field-last" placeholder="Last Name" value="Doe">
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class="modal-footer">
                                                                                                <button class="btn btn-sm" data-dismiss="modal">
                                                                                                        <i class="icon-remove"></i>
                                                                                                        Cancel
                                                                                                </button>

                                                                                                <button class="btn btn-sm btn-primary">
                                                                                                        <i class="icon-ok"></i>
                                                                                                        Save
                                                                                                </button>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div><!-- PAGE CONTENT ENDS -->
                                                        </div><!-- /.col -->
                                                </div><!-- /.row -->
                                        </div>