<?php
return [
  'metadata' =>
  [
    'apiVersion' => '2012-10-29',
    'endpointPrefix' => 'datapipeline',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'AWS Data Pipeline',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'DataPipeline',
    'protocol' => 'json',
  ],
  'operations' =>
  [
    'ActivatePipeline' =>
    [
      'name' => 'ActivatePipeline',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ActivatePipelineInput',
      ],
      'output' =>
      [
        'shape' => 'ActivatePipelineOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'CreatePipeline' =>
    [
      'name' => 'CreatePipeline',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'CreatePipelineInput',
      ],
      'output' =>
      [
        'shape' => 'CreatePipelineOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'DeletePipeline' =>
    [
      'name' => 'DeletePipeline',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeletePipelineInput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeObjects' =>
    [
      'name' => 'DescribeObjects',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeObjectsInput',
      ],
      'output' =>
      [
        'shape' => 'DescribeObjectsOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
      ],
    ],
    'DescribePipelines' =>
    [
      'name' => 'DescribePipelines',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribePipelinesInput',
      ],
      'output' =>
      [
        'shape' => 'DescribePipelinesOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'EvaluateExpression' =>
    [
      'name' => 'EvaluateExpression',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'EvaluateExpressionInput',
      ],
      'output' =>
      [
        'shape' => 'EvaluateExpressionOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'TaskNotFoundException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
      ],
    ],
    'GetPipelineDefinition' =>
    [
      'name' => 'GetPipelineDefinition',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'GetPipelineDefinitionInput',
      ],
      'output' =>
      [
        'shape' => 'GetPipelineDefinitionOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
      ],
    ],
    'ListPipelines' =>
    [
      'name' => 'ListPipelines',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ListPipelinesInput',
      ],
      'output' =>
      [
        'shape' => 'ListPipelinesOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'PollForTask' =>
    [
      'name' => 'PollForTask',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'PollForTaskInput',
      ],
      'output' =>
      [
        'shape' => 'PollForTaskOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'TaskNotFoundException',
          'exception' => true,
        ],
      ],
    ],
    'PutPipelineDefinition' =>
    [
      'name' => 'PutPipelineDefinition',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'PutPipelineDefinitionInput',
      ],
      'output' =>
      [
        'shape' => 'PutPipelineDefinitionOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
      ],
    ],
    'QueryObjects' =>
    [
      'name' => 'QueryObjects',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'QueryObjectsInput',
      ],
      'output' =>
      [
        'shape' => 'QueryObjectsOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'ReportTaskProgress' =>
    [
      'name' => 'ReportTaskProgress',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ReportTaskProgressInput',
      ],
      'output' =>
      [
        'shape' => 'ReportTaskProgressOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'TaskNotFoundException',
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
      ],
    ],
    'ReportTaskRunnerHeartbeat' =>
    [
      'name' => 'ReportTaskRunnerHeartbeat',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ReportTaskRunnerHeartbeatInput',
      ],
      'output' =>
      [
        'shape' => 'ReportTaskRunnerHeartbeatOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'SetStatus' =>
    [
      'name' => 'SetStatus',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'SetStatusInput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        3 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
      ],
    ],
    'SetTaskStatus' =>
    [
      'name' => 'SetTaskStatus',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'SetTaskStatusInput',
      ],
      'output' =>
      [
        'shape' => 'SetTaskStatusOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'TaskNotFoundException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
      ],
    ],
    'ValidatePipelineDefinition' =>
    [
      'name' => 'ValidatePipelineDefinition',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ValidatePipelineDefinitionInput',
      ],
      'output' =>
      [
        'shape' => 'ValidatePipelineDefinitionOutput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InternalServiceError',
          'exception' => true,
          'fault' => true,
        ],
        1 =>
        [
          'shape' => 'InvalidRequestException',
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'PipelineNotFoundException',
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'PipelineDeletedException',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' =>
  [
    'ActivatePipelineInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
      ],
    ],
    'ActivatePipelineOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
    ],
    'CreatePipelineInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'name',
        1 => 'uniqueId',
      ],
      'members' =>
      [
        'name' =>
        [
          'shape' => 'id',
        ],
        'uniqueId' =>
        [
          'shape' => 'id',
        ],
        'description' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'CreatePipelineOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
      ],
    ],
    'DeletePipelineInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
      ],
    ],
    'DescribeObjectsInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
        1 => 'objectIds',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'objectIds' =>
        [
          'shape' => 'idList',
        ],
        'evaluateExpressions' =>
        [
          'shape' => 'boolean',
        ],
        'marker' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'DescribeObjectsOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineObjects',
      ],
      'members' =>
      [
        'pipelineObjects' =>
        [
          'shape' => 'PipelineObjectList',
        ],
        'marker' =>
        [
          'shape' => 'string',
        ],
        'hasMoreResults' =>
        [
          'shape' => 'boolean',
        ],
      ],
    ],
    'DescribePipelinesInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineIds',
      ],
      'members' =>
      [
        'pipelineIds' =>
        [
          'shape' => 'idList',
        ],
      ],
    ],
    'DescribePipelinesOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineDescriptionList',
      ],
      'members' =>
      [
        'pipelineDescriptionList' =>
        [
          'shape' => 'PipelineDescriptionList',
        ],
      ],
    ],
    'EvaluateExpressionInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
        1 => 'objectId',
        2 => 'expression',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'objectId' =>
        [
          'shape' => 'id',
        ],
        'expression' =>
        [
          'shape' => 'longString',
        ],
      ],
    ],
    'EvaluateExpressionOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'evaluatedExpression',
      ],
      'members' =>
      [
        'evaluatedExpression' =>
        [
          'shape' => 'longString',
        ],
      ],
    ],
    'Field' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'key',
      ],
      'members' =>
      [
        'key' =>
        [
          'shape' => 'fieldNameString',
        ],
        'stringValue' =>
        [
          'shape' => 'fieldStringValue',
        ],
        'refValue' =>
        [
          'shape' => 'fieldNameString',
        ],
      ],
    ],
    'GetPipelineDefinitionInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'version' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'GetPipelineDefinitionOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'pipelineObjects' =>
        [
          'shape' => 'PipelineObjectList',
        ],
      ],
    ],
    'InstanceIdentity' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'document' =>
        [
          'shape' => 'string',
        ],
        'signature' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'InternalServiceError' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'errorMessage',
        ],
      ],
      'exception' => true,
      'fault' => true,
    ],
    'InvalidRequestException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'errorMessage',
        ],
      ],
      'exception' => true,
    ],
    'ListPipelinesInput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'marker' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'ListPipelinesOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineIdList',
      ],
      'members' =>
      [
        'pipelineIdList' =>
        [
          'shape' => 'pipelineList',
        ],
        'marker' =>
        [
          'shape' => 'string',
        ],
        'hasMoreResults' =>
        [
          'shape' => 'boolean',
        ],
      ],
    ],
    'Operator' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'type' =>
        [
          'shape' => 'OperatorType',
        ],
        'values' =>
        [
          'shape' => 'stringList',
        ],
      ],
    ],
    'OperatorType' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'EQ',
        1 => 'REF_EQ',
        2 => 'LE',
        3 => 'GE',
        4 => 'BETWEEN',
      ],
    ],
    'PipelineDeletedException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'errorMessage',
        ],
      ],
      'exception' => true,
    ],
    'PipelineDescription' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
        1 => 'name',
        2 => 'fields',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'name' =>
        [
          'shape' => 'id',
        ],
        'fields' =>
        [
          'shape' => 'fieldList',
        ],
        'description' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'PipelineDescriptionList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'PipelineDescription',
      ],
    ],
    'PipelineIdName' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'id' =>
        [
          'shape' => 'id',
        ],
        'name' =>
        [
          'shape' => 'id',
        ],
      ],
    ],
    'PipelineNotFoundException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'errorMessage',
        ],
      ],
      'exception' => true,
    ],
    'PipelineObject' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'id',
        1 => 'name',
        2 => 'fields',
      ],
      'members' =>
      [
        'id' =>
        [
          'shape' => 'id',
        ],
        'name' =>
        [
          'shape' => 'id',
        ],
        'fields' =>
        [
          'shape' => 'fieldList',
        ],
      ],
    ],
    'PipelineObjectList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'PipelineObject',
      ],
    ],
    'PipelineObjectMap' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'id',
      ],
      'value' =>
      [
        'shape' => 'PipelineObject',
      ],
    ],
    'PollForTaskInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'workerGroup',
      ],
      'members' =>
      [
        'workerGroup' =>
        [
          'shape' => 'string',
        ],
        'hostname' =>
        [
          'shape' => 'id',
        ],
        'instanceIdentity' =>
        [
          'shape' => 'InstanceIdentity',
        ],
      ],
    ],
    'PollForTaskOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'taskObject' =>
        [
          'shape' => 'TaskObject',
        ],
      ],
    ],
    'PutPipelineDefinitionInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
        1 => 'pipelineObjects',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'pipelineObjects' =>
        [
          'shape' => 'PipelineObjectList',
        ],
      ],
    ],
    'PutPipelineDefinitionOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'errored',
      ],
      'members' =>
      [
        'validationErrors' =>
        [
          'shape' => 'ValidationErrors',
        ],
        'validationWarnings' =>
        [
          'shape' => 'ValidationWarnings',
        ],
        'errored' =>
        [
          'shape' => 'boolean',
        ],
      ],
    ],
    'Query' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'selectors' =>
        [
          'shape' => 'SelectorList',
        ],
      ],
    ],
    'QueryObjectsInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
        1 => 'sphere',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'query' =>
        [
          'shape' => 'Query',
        ],
        'sphere' =>
        [
          'shape' => 'string',
        ],
        'marker' =>
        [
          'shape' => 'string',
        ],
        'limit' =>
        [
          'shape' => 'int',
        ],
      ],
    ],
    'QueryObjectsOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'ids' =>
        [
          'shape' => 'idList',
        ],
        'marker' =>
        [
          'shape' => 'string',
        ],
        'hasMoreResults' =>
        [
          'shape' => 'boolean',
        ],
      ],
    ],
    'ReportTaskProgressInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'taskId',
      ],
      'members' =>
      [
        'taskId' =>
        [
          'shape' => 'taskId',
        ],
      ],
    ],
    'ReportTaskProgressOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'canceled',
      ],
      'members' =>
      [
        'canceled' =>
        [
          'shape' => 'boolean',
        ],
      ],
    ],
    'ReportTaskRunnerHeartbeatInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'taskrunnerId',
      ],
      'members' =>
      [
        'taskrunnerId' =>
        [
          'shape' => 'id',
        ],
        'workerGroup' =>
        [
          'shape' => 'string',
        ],
        'hostname' =>
        [
          'shape' => 'id',
        ],
      ],
    ],
    'ReportTaskRunnerHeartbeatOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'terminate',
      ],
      'members' =>
      [
        'terminate' =>
        [
          'shape' => 'boolean',
        ],
      ],
    ],
    'Selector' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'fieldName' =>
        [
          'shape' => 'string',
        ],
        'operator' =>
        [
          'shape' => 'Operator',
        ],
      ],
    ],
    'SelectorList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Selector',
      ],
    ],
    'SetStatusInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
        1 => 'objectIds',
        2 => 'status',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'objectIds' =>
        [
          'shape' => 'idList',
        ],
        'status' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'SetTaskStatusInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'taskId',
        1 => 'taskStatus',
      ],
      'members' =>
      [
        'taskId' =>
        [
          'shape' => 'taskId',
        ],
        'taskStatus' =>
        [
          'shape' => 'TaskStatus',
        ],
        'errorId' =>
        [
          'shape' => 'string',
        ],
        'errorMessage' =>
        [
          'shape' => 'errorMessage',
        ],
        'errorStackTrace' =>
        [
          'shape' => 'string',
        ],
      ],
    ],
    'SetTaskStatusOutput' =>
    [
      'type' => 'structure',
      'members' =>
      [
      ],
    ],
    'TaskNotFoundException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'errorMessage',
        ],
      ],
      'exception' => true,
    ],
    'TaskObject' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'taskId' =>
        [
          'shape' => 'taskId',
        ],
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'attemptId' =>
        [
          'shape' => 'id',
        ],
        'objects' =>
        [
          'shape' => 'PipelineObjectMap',
        ],
      ],
    ],
    'TaskStatus' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'FINISHED',
        1 => 'FAILED',
        2 => 'FALSE',
      ],
    ],
    'ValidatePipelineDefinitionInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'pipelineId',
        1 => 'pipelineObjects',
      ],
      'members' =>
      [
        'pipelineId' =>
        [
          'shape' => 'id',
        ],
        'pipelineObjects' =>
        [
          'shape' => 'PipelineObjectList',
        ],
      ],
    ],
    'ValidatePipelineDefinitionOutput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'errored',
      ],
      'members' =>
      [
        'validationErrors' =>
        [
          'shape' => 'ValidationErrors',
        ],
        'validationWarnings' =>
        [
          'shape' => 'ValidationWarnings',
        ],
        'errored' =>
        [
          'shape' => 'boolean',
        ],
      ],
    ],
    'ValidationError' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'id' =>
        [
          'shape' => 'id',
        ],
        'errors' =>
        [
          'shape' => 'validationMessages',
        ],
      ],
    ],
    'ValidationErrors' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'ValidationError',
      ],
    ],
    'ValidationWarning' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'id' =>
        [
          'shape' => 'id',
        ],
        'warnings' =>
        [
          'shape' => 'validationMessages',
        ],
      ],
    ],
    'ValidationWarnings' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'ValidationWarning',
      ],
    ],
    'boolean' =>
    [
      'type' => 'boolean',
    ],
    'errorMessage' =>
    [
      'type' => 'string',
    ],
    'fieldList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Field',
      ],
    ],
    'fieldNameString' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'fieldStringValue' =>
    [
      'type' => 'string',
      'min' => 0,
      'max' => 10240,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'id' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 1024,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'idList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'id',
      ],
    ],
    'int' =>
    [
      'type' => 'integer',
    ],
    'longString' =>
    [
      'type' => 'string',
      'min' => 0,
      'max' => 20971520,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'pipelineList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'PipelineIdName',
      ],
    ],
    'string' =>
    [
      'type' => 'string',
      'min' => 0,
      'max' => 1024,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'stringList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'string',
      ],
    ],
    'taskId' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 2048,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'validationMessage' =>
    [
      'type' => 'string',
      'min' => 0,
      'max' => 10000,
      'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
    ],
    'validationMessages' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'validationMessage',
      ],
    ],
  ],
];