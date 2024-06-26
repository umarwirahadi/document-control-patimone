<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class Letter extends Model
{
    use HasFactory;
    protected $fillable = ['type','package_id','letter_source_id','correspondence_type_id','document_no','letter_ref_no','letter_date','received_date','attention_to','subject','reference','pic_letter_out','attachment','attachment_type','cc_to_letter_out','delivery_date','document_control_date','due_date','engineer_ref_no','engineer_res_date','status','description','response_required','rev','received_by'];
    protected $keyType = 'string';

    public $incrementing = false;
    protected $casts = ['id'=>'string'];
    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->id=Uuid::uuid4()->toString();
            $data->created_by=Auth::user()->id;
            $data->status='0'; //it's mean draft status
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

    public function scopeLetter($query,$param){
        return $query->where('type', 'IN')->where('status','1')->where('package_id',$param->package_id);
    }

    public function scopeTransmittal($query,$param=null){
        return $query->where('type', 'IN')->where('status','1')->where('package_id',$param)->where('correspondence_type','a06e019b-38fe-4c2f-adf1-a481493303ce');
    }

    public function referencesDoc(){
        return $this->hasMany(DocumentReference::class);
    }

    public function assignments(){
        /* if you want to use separatly between assignment and reference please uncomment
            return $this->hasMany(AssignmentLetter::class,'letter_id','id')->where('action',1);
        */
        return $this->hasMany(AssignmentLetter::class,'letter_id','id')->orderBy('name')->orderBy('action');
    }

    public function references(){
        return $this->hasMany(AssignmentLetter::class,'letter_id','id')->where('action',2);
    }

    public function attachments(){
        return $this->hasMany(AttachmentFile::class,'letter_id','id');
    }

    public function getFatchAssignToAttribute(){
        return explode(",",$this->assign_to);
    }

    public function source(){
        return $this->belongsTo(LetterSource::class,'letter_source_id','id');
    }

    public function correstype(){
        return $this->belongsTo(CorrespondenceType::class,'correspondence_type_id');
    }


}
