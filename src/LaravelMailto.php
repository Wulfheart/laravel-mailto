<?php

namespace Wulfheart\LaravelMailto;

class LaravelMailto
{
    public array $to = [];
    public array $cc = [];
    public array $bcc = [];
    public ?string $subject;
    public ?string $body;

    public function construct()
    {
    }

    public function to(string|array $to): self
    {
        if (is_array($to)) {
            array_push($this->to, ...$to);
        } else {
            array_push($this->to, $to);
        }
        return $this;
    }

    public function cc(string|array $cc): self
    {
        if (is_array($cc)) {
            array_push($this->cc, ...$cc);
        } else {
            array_push($this->cc, $cc);
        }
        return $this;
    }

    public function bcc(string|array $bcc): self
    {
        if (is_array($bcc)) {
            array_push($this->bcc, ...$bcc);
        } else {
            array_push($this->bcc, $bcc);
        }
        return $this;
    }

    public function subject(string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function body(string $body): self
    {
        $this->body = $body;
        return $this;
    }

    public function __toString(): string
    {
        return "mailto:".implode(',', $this->to).'?'.http_build_query([
                'cc' => implode(',', $this?->cc),
                'bcc' => implode(',', $this?->bcc),
                'subject' => $this?->subject,
                'body' => $this?->body,
            ], encoding_type: PHP_QUERY_RFC3986);
    }
}
