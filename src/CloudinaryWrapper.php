<?php

namespace DiegoFelix\CloudinaryWrapper;

use Cloudinary;
use Cloudinary\Uploader;

class CloudinaryWrapper
{
    /**
     * Cloudinary Cloudinaryrary
     *
     * @var Cloudinary
     */
    protected $cloudinary;

    /**
     * Cloudinary Uploader.
     *
     * @var \Cloudinary\Uploader
     */
    protected $uploader;

    public function __construct($appName, $key, $secret)
    {
        $this->cloudinary = new Cloudinary;
        $this->uploader = new Uploader;
        $this->cloudinary->config(array(
            'cloud_name' => $appName,
            'api_key'    => $key,
            'api_secret' => $secret
        ));
    }

    /**
     * Cloudinary instance.
     *
     * @return \Cloudinary
     */
    public function getCloudinary()
    {
        return $this->cloudinary;
    }

    /**
     * Cloudinary uploader instance.
     *
     * @return \Cloudinary\Uploader
     */
    public function getUploader()
    {
        return $this->uploader;
    }

    /**
     * Upload image to cloudinary.
     *
     * @param  mixed $source
     * @param  array  $tags
     * @return array uploaded data
     */
    public function upload($source, $tags = array())
    {
        return $this->getUploader()->upload($source, $options);
    }

    /**
     * Display image.
     *
     * @param  string $publicId
     * @param  array  $options
     * @return string
     */
    public function show($publicId, $options = array())
    {
        return $this->getCloudinary()->cloudinary_url($publicId, $options);
    }

    /**
     * Destroy image.
     *
     * @param  string $publicId
     * @param  array  $options
     * @return array
     */
    public function destroy($publicId, $options = array())
    {
        return $this->getUploader()->destroy($publicId, $options);
    }

    /**
     * Overlaod the cloudinary methods
     *
     * @param  string $methodName
     * @param  mixed $arguments
     * @return mixed
     */
    public function __call($methodName, $arguments)
    {
        if (method_exists($this->getCloudinary, $methodName)) {
            return $this->getUploader()->$methodName($arguments);
        }

        return $this->getCloudinary()->$methodName($arguments);
    }
}