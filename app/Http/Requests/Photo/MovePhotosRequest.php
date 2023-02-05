<?php

namespace App\Http\Requests\Photo;

use App\Contracts\Http\Requests\HasAlbum;
use App\Contracts\Http\Requests\HasPhotos;
use App\Contracts\Http\Requests\RequestAttribute;
use App\Http\Requests\BaseApiRequest;
use App\Http\Requests\Traits\Authorize\AuthorizeCanEditPhotosAlbumTrait;
use App\Http\Requests\Traits\HasAlbumTrait;
use App\Http\Requests\Traits\HasPhotosTrait;
use App\Http\RuleSets\Photo\MovePhotosRuleSet;
use App\Models\Album;
use App\Models\Photo;

class MovePhotosRequest extends BaseApiRequest implements HasPhotos, HasAlbum
{
	use HasPhotosTrait;
	use HasAlbumTrait;
	use AuthorizeCanEditPhotosAlbumTrait;

	/**
	 * {@inheritDoc}
	 */
	public function rules(): array
	{
		return MovePhotosRuleSet::rules();
	}

	/**
	 * {@inheritDoc}
	 */
	protected function processValidatedValues(array $values, array $files): void
	{
		$this->photos = Photo::query()->findOrFail(
			$values[RequestAttribute::PHOTO_IDS_ATTRIBUTE]
		);
		$targetAlbumID = $values[RequestAttribute::ALBUM_ID_ATTRIBUTE];
		$this->album = $targetAlbumID === null ?
			null :
			Album::query()->findOrFail($targetAlbumID);
	}
}
