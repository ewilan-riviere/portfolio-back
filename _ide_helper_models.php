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
 * @property \App\Models\Enums\DeveloperLinkType|null $type
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
 * @property \App\Models\Enums\DeveloperRole|null $role
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
 * App\Models\ExperienceType
 *
 * @property int $id
 * @property array $title
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Formation[] $formations
 * @property-read int|null $formations_count
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Database\Factories\ExperienceTypeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceType whereUpdatedAt($value)
 */
	class ExperienceType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Formation
 *
 * @property int $id
 * @property string|null $slug
 * @property array|null $title
 * @property string|null $certificate
 * @property string $color
 * @property int $color_text_white
 * @property array|null $resume
 * @property array|null $description
 * @property string|null $type
 * @property string|null $level
 * @property string|null $date_begin
 * @property string|null $date_end
 * @property bool $is_finished
 * @property bool $is_display
 * @property int|null $experience_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ExperienceType|null $experienceType
 * @property-read mixed $image
 * @property-read mixed $logo
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FormationLink[] $links
 * @property-read int|null $links_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formation whereExperienceTypeId($value)
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
 * App\Models\FormationLink
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $link
 * @property \App\Models\Enums\FormationLinkType|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $formation_id
 * @property-read \App\Models\Formation|null $formation
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink whereFormationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormationLink whereUpdatedAt($value)
 */
	class FormationLink extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Passion
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
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
 * @method static \Illuminate\Database\Eloquent\Builder|Passion whereSlug($value)
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
 * @property array|null $subtitle
 * @property int|null $order
 * @property array|null $abstract
 * @property array|null $description
 * @property bool $is_display
 * @property bool $is_favorite
 * @property bool $is_private
 * @property \App\Models\ProjectStatus|null $status
 * @property int|null $experience_type_id
 * @property int|null $project_status_id
 * @property int|null $formation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Developer[] $developers
 * @property-read int|null $developers_count
 * @property-read \App\Models\ExperienceType|null $experience
 * @property-read \App\Models\Formation|null $formation
 * @property-read mixed $picture_banner
 * @property-read mixed $picture_logo
 * @property-read mixed $picture_title
 * @property-read mixed $show_link
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProjectLink[] $links
 * @property-read int|null $links_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property-read int|null $skills_count
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereAbstract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereExperienceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereFormationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsFavorite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsPrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereProjectStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereSubtitle($value)
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
 * @property \App\Models\Enums\ProjectLinkType|null $type
 * @property int|null $project_id
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereRepository($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectLink whereType($value)
 */
	class ProjectLink extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProjectStatus
 *
 * @property int $id
 * @property array $name
 * @property string|null $slug
 * @property int|null $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Database\Factories\ProjectStatusFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectStatus whereUpdatedAt($value)
 */
	class ProjectStatus extends \Eloquent {}
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
 * @property-read string|null $image_path
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

