class Api::VideosController < ActionController::API
  def index
    videos = Video.all
    render json: video_json(videos)
  end

  def show
    video = Video.find(params[:id])
    render json: video_json(video)
  end

  def create
    video = Video.create(video_params)
    render json: video_json(video)
  end

  def destroy
    Video.find(params[:id]).destroy
    head 204
  end

  def update
    video = Video.find(params[:id])
    video.update(video_params)
    video.save()
    render json: video_json(video)
  end

  private

  def video_json(video)
    VideoSerializer.new(video, include: [:tags]).serializable_hash
  end

  def video_params
    params.require(:video).permit(:name, :description, :thumbnail, :videoUrl)
  end
end
