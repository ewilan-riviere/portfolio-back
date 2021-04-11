<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Developer
 *
 * @property int $id
 * @property string|null $slug
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeveloperLink[] $links
 * @property-read int|null $links_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\DeveloperLink|null $primaryLink
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Developer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereUpdatedAt($value)
 */
	class Developer extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\DeveloperLink
 *
 * @property int $id
 * @property \App\Enums\DeveloperLinkType|null $type
 * @property string|null $url
 * @property bool $is_primary
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $developer_id
 * @property-read \App\Models\Developer|null $developer
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereDeveloperId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereIsPrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperLink whereUrl($value)
 */
	class DeveloperLink extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeveloperProject
 *
 * @property int $id
 * @property int|null $project_id
 * @property int|null $developer_id
 * @property \App\Enums\DeveloperRole|null $role
 * @property-read \App\Models\Developer|null $developer
 * @property-read \App\Models\Project|null $project
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject whereDeveloperId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeveloperProject whereRole($value)
 */
	class DeveloperProject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Formation
 *
 * @property int $id
 * @property string|null $slug
 * @property string|null $title
 * @property string|null $certificate
 * @property string $color
 * @property int $color_text_white
 * @property string|null $resume
 * @property \App\Enums\FormationType|null $type
 * @property string|null $level
 * @property string|null $date_begin
 * @property string|null $date_end
 * @property bool $is_finished
 * @property bool $is_display
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormationExtra[] $extras
 * @property-read int|null $extras_count
 * @property-read mixed $image
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Formation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Formation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Formation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereColorTextWhite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereDateBegin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereIsDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereIsFinished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereUpdatedAt($value)
 */
	class Formation extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\FormationExtra
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $link
 * @property \App\Enums\FormationExtraType|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $formation_id
 * @property-read \App\Models\Formation|null $formation
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereFormationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationExtra whereUpdatedAt($value)
 */
	class FormationExtra extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Passion
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $icon
 * @property string|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Passion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Passion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passion whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passion whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passion whereUpdatedAt($value)
 */
	class Passion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Project
 *
 * @property int $id
 * @property string|null $slug
 * @property string $title
 * @property int|null $order
 * @property string|null $description
 * @property bool $is_display
 * @property bool $is_favorite
 * @property \App\Enums\ProjectStatus|null $status
 * @property int|null $formation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Developer[] $developers
 * @property-read int|null $developers_count
 * @property-read \App\Models\Formation|null $formation
 * @property-read mixed $image
 * @property-read mixed $image_title
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProjectLink[] $projectLinks
 * @property-read int|null $project_links_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property-read int|null $skills_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFormationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsFavorite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\ProjectLink
 *
 * @property int $id
 * @property string|null $repository
 * @property \App\Models\Project|null $project
 * @property \App\Enums\ProjectLinkType|null $type
 * @property bool $is_private
 * @property int|null $project_id
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereIsPrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereRepository($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereType($value)
 */
	class ProjectLink extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string|null $slug
 * @property string $title
 * @property string|null $version
 * @property string|null $link
 * @property int $is_free
 * @property string|null $color
 * @property int $color_text_dark
 * @property string|null $subtitle
 * @property string|null $details
 * @property int $is_favorite
 * @property float $rating
 * @property string|null $image
 * @property string|null $blockquote_text
 * @property string|null $blockquote_who
 * @property int|null $skill_category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read int|null $projects_count
 * @property-read \App\Models\SkillCategory|null $skillCategory
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereBlockquoteText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereBlockquoteWho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereColorTextDark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereIsFavorite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereIsFree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSkillCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereVersion($value)
 */
	class Skill extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\SkillCategory
 *
 * @property int $id
 * @property string|null $slug
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-write mixed $display
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property-read int|null $skills_count
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillCategory whereUpdatedAt($value)
 */
	class SkillCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Submission
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Submission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Submission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Submission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Submission whereUpdatedAt($value)
 */
	class Submission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

