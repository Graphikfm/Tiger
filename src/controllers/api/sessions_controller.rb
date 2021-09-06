class Api::SessionsController < ActionController::API
  def create
    puts params
    user = User.find_by email: params["email"] 
    if(user and user.check_password(params["mdp"])) then
      render json: UserSerializer.new(user).serializable_hash
    else
      head 401
    end
  end
end
