ssh_user       = "echo@bonita.joyent.us"
ssh_port       = "22"
document_root  = "~/web/public/golf/"
rsync_delete   = false
rsync_args     = "--chmod=Fa+r"
deploy_default = "rsync"
deploy_branch  = :release  # :deploy will only run if in this branch

desc "Deploy with rsync"
task :deploy do
	abort("## Not in #{deploy_branch} branch!") unless in_branch?(deploy_branch)
  exclude = ""
  if File.exists?('./rsync-exclude')
    exclude = "--exclude-from '#{File.expand_path('./rsync-exclude')}'"
  end
  puts "## Deploying website via Rsync"
  ok_failed system("rsync -avze 'ssh -p #{ssh_port}' #{exclude} #{rsync_args} #{"--delete" unless rsync_delete == false} . #{ssh_user}:#{document_root}")
end

def ok_failed(condition)
  if (condition)
    puts "## OK"
  else
    puts "## FAILED"
  end
end

def in_branch?(branch)
	git_branch = %x[git rev-parse --abbrev-ref HEAD].strip.to_sym
	branch == git_branch
end
