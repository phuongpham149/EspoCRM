<div class="page-header">
    <div class="row">
        <div class="col-sm-7">
            {{#if displayTitle}}
            <h3>{{translate 'Stream'}}</h3>
            {{/if}}
        </div>
        <div class="col-sm-5">
            <div class="pull-right btn-group">
                {{#each filterList}}
                <button class="btn btn-default{{#ifEqual this ../filter}} active{{/ifEqual}}" data-action="selectFilter" data-name="{{./this}}">{{translate this scope='Note' category='filters'}}</button>
                {{/each}}
                <button class="btn btn-default" data-action="refresh" title="{{translate 'checkForNewNotes' category='messages'}}">&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="create-post-container">
            {{{createPost}}}
        </div>
        <div class="list-container">{{{list}}}</div>
    </div>
</div>

