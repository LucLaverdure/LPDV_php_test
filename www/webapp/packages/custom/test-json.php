<?php

use cebe\openapi\Reader;
use GuzzleHttp\Psr7\ServerRequest;
use League\OpenAPIValidation\PSR7\ValidatorBuilder;

class _tag_test extends \MeshMVC\Controller {

    function sign() {
        return method("post") && route("/tag"); // _html controller class dependency
    }

    function run() {
        try {
            $apiSpec = Reader::readFromYamlFile(PATH . 'app.yaml');
            $psrRequest = ServerRequest::fromGlobals();
            $validator = (new ValidatorBuilder())->fromSchema($apiSpec)->getServerRequestValidator();
            $validator->validate($psrRequest);
        } catch (\Exception $e) {
            echo "validation failed.";
            die();
        }

        echo "validation successful.";
    }
}

class _contact_name_test extends \MeshMVC\Controller {

    function sign() {
        return method("post") && route("/contact_name"); // _html controller class dependency
    }

    function run() {
        try {
            $apiSpec = Reader::readFromYamlFile(PATH . 'app.yaml');
            $psrRequest = ServerRequest::fromGlobals();
            $validator = (new ValidatorBuilder())->fromSchema($apiSpec)->getServerRequestValidator();
            $validator->validate($psrRequest);
        } catch (\Exception $e) {
            echo "validation failed.";
            die();
        }

        echo "validation successful.";
    }
}