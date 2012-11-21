ssh_user       = "echo@bonita.joyent.us"
ssh_port       = "22"
document_root  = "~/web/public/golf/"
rsync_delete   = false
rsync_args     = "--chmod=Fa+r"
deploy_default = "rsync"

desc "Deploy with rsync"
task :deploy do
  exclude = ""
  if File.exists?('./rsync-exclude')
    exclude = "--exclude-from '#{File.expand_path('./rsync-exclude')}'"
  end
  puts "## Deploying website via Rsync"
  ok_failed system("rsync -avze 'ssh -p #{ssh_port}' #{exclude} #{rsync_args} #{"--delete" unless rsync_delete == false} . #{ssh_user}:#{document_root}")
end

def ok_failed(condition)
  if (condition)
    puts "OK"
  else
    puts "FAILED"
  end
end
