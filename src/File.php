<?php
namespace Slack;

/**
 * Contains the information about a file to be uploaded.
 */
class File
{
    /**
     * @var string Path to the file.
     */
    protected $path;

    /**
     * @var bool
     */
    protected $snippet;

    /**
     * @var string The file's title.
     */
    protected $title;

    /**
     * @var string Filename of file.
     */
    protected $filename;

    /**
     * @var string Initial comment to add to file.
     */
    protected $initialComment;

    /**
     * @var string A file type identifier.
     */
    protected $filetype;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return File
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param bool $snippet
     */
    public function treatAsSnippet($snippet)
    {
        $this->snippet = $snippet;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return File
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return File
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitialComment()
    {
        return $this->initialComment;
    }

    /**
     * @param string $initialComment
     * @return File
     */
    public function setInitialComment($initialComment)
    {
        $this->initialComment = $initialComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getFiletype()
    {
        return $this->filetype;
    }

    /**
     * @param string $filetype
     * @return File
     */
    public function setFiletype($filetype)
    {
        $this->filetype = $filetype;
        return $this;
    }
}