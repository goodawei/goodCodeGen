<?php
namespace Goods\Rpc\Tag;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;
use JsonSerializable;
use stdClass;


class TagServiceProcessor {
  protected $handler_ = null;
  public function __construct($handler) {
    $this->handler_ = $handler;
  }

  public function process($input, $output) {
    $rseqid = 0;
    $fname = null;
    $mtype = 0;

    $input->readMessageBegin($fname, $mtype, $rseqid);
    $methodname = 'process_'.$fname;
    if (!method_exists($this, $methodname)) {
      $input->skip(TType::STRUCT);
      $input->readMessageEnd();
      $x = new TApplicationException('Function '.$fname.' not implemented.', TApplicationException::UNKNOWN_METHOD);
      $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
      $x->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
      return;
    }
    $this->$methodname($rseqid, $input, $output);
    return true;
  }

  protected function process_name($seqid, $input, $output) {
    $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
    if ($bin_accel)
    {
      $args = thrift_protocol_read_binary_after_message_begin($input, '\Goods\Rpc\Tag\TagService_name_args', $input->isStrictRead());
    }
    else
    {
      $args = new \Goods\Rpc\Tag\TagService_name_args();
      $args->read($input);
      $input->readMessageEnd();
    }
    $result = new \Goods\Rpc\Tag\TagService_name_result();
    $result->success = $this->handler_->name($args->name);
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'name', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('name', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_save($seqid, $input, $output) {
    $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
    if ($bin_accel)
    {
      $args = thrift_protocol_read_binary_after_message_begin($input, '\Goods\Rpc\Tag\TagService_save_args', $input->isStrictRead());
    }
    else
    {
      $args = new \Goods\Rpc\Tag\TagService_save_args();
      $args->read($input);
      $input->readMessageEnd();
    }
    $result = new \Goods\Rpc\Tag\TagService_save_result();
    $result->success = $this->handler_->save($args->tag);
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'save', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('save', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
  protected function process_get($seqid, $input, $output) {
    $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
    if ($bin_accel)
    {
      $args = thrift_protocol_read_binary_after_message_begin($input, '\Goods\Rpc\Tag\TagService_get_args', $input->isStrictRead());
    }
    else
    {
      $args = new \Goods\Rpc\Tag\TagService_get_args();
      $args->read($input);
      $input->readMessageEnd();
    }
    $result = new \Goods\Rpc\Tag\TagService_get_result();
    $result->success = $this->handler_->get($args->tag);
    $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($output, 'get', TMessageType::REPLY, $result, $seqid, $output->isStrictWrite());
    }
    else
    {
      $output->writeMessageBegin('get', TMessageType::REPLY, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}
